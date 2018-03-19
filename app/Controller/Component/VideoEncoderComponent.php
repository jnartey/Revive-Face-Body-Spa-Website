<?php
/*
 * Video Encoder CakePHP Component
 * Copyright (c) 2009 Andrew Weir
 * http://andrw.new
 *
 *
 * @author      Andrew Weir <andru.weir@gmail.com>
 * @version     1.0
 * @license     MIT
 */
class VideoEncoderComponent extends Component {
	
	/**
	 * Everything in this method can be placed into a global configuration
	 * file that is called at bootstrap/runtime.
	 **/
	function __construct () {
		// ffmpeg path
		Configure::write('Video.ffmpeg_path', '/usr/local/bin/ffmpeg');

		// flvtool2 path
		//Configure::write('Video.flvtool2_path', '/bin/flvtool2');

		// Bitrate of audio (valid vaues are 16,32,64)
		Configure::write('Video.bitrate', 64);

		// Sampling rate (valid values are 11025, 22050, 44100)
		Configure::write('Video.samprate', 44100);
	}
	
	function convert_video ($in, $out, $width = 480, $height = 360, $optimized = false) {
		if ($optimized == false) {
			$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -y -s {$width}x{$height} -r 30 -b 500 -ar " . Configure::read('Video.samprate') . " -ab " . Configure::read('Video.bitrate') . " {$out} 2>&1";
		} else {
			$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -b 256k -ac 1 -ar 44100 {$out} 2>&1";
		}
		echo exec($command);
	}
	
	function scale_video ($in, $out, $width = 480, $height = 360, $optimized = false) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -vf scale={$width}:{$height} {$out} 2>&1";
		echo exec($command);
	}
	
	// function set_buffering ($in) {
	// 		$command = Configure::read('Video.flvtool2_path') . " -U {$in}";
	// 		shell_exec($command);
	// 	}
	
	function format_video_mp4 ($in, $out) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -b 1500k -vcodec libx264 -vpre slow -vpre baseline -g 30 {$out}'.mp4'  2>&1";
		echo exec($command);
		
	}
	
	function format_video_webm ($in, $out) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -c:v libvpx -minrate 1M -maxrate 1M -b:v 1M {$out}'.webm'  2>&1";
		shell_exec($command);
		
	}
	
	function format_video_ogv ($in, $out) {
		//$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -b 1500k -vcodec libvpx -acodec libvorbis -ab 160000 -f webm -g 30 {$out}'.webm'  2>&1";
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -b 1500k -vcodec libtheora -acodec libvorbis -ab 160000 -g 30 {$out}'.ogv'  2>&1";
		echo exec($command);
		
	}
		
	function grab_image_poster ($in, $out) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -deinterlace -an -ss 10 -f mjpeg -t 1 -r 1 -y -s 800x600 {$out} 2>&1";
		shell_exec($command);
	}
	
	function grab_image_thumb ($in, $out) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} -deinterlace -an -ss 10 -f mjpeg -t 1 -r 1 -y -s 120x90 {$out} 2>&1";
		shell_exec($command);
	}
	
	function grab_image ($in, $out) {
		$command = Configure::read('Video.ffmpeg_path') . " -y -i {$in} -f mjpeg -t 00.010 {$out}.jpg  2>&1";
		shell_exec($command);
		
	}
	
	function get_duration ($in) {
		$command = Configure::read('Video.ffmpeg_path') . " -i {$in} 2>&1 | grep \"Duration\" | cut -d ' ' -f 4 | sed s/,//";
		return shell_exec($command);
	}
	
	function get_filesize ($in) {
		return filesize($in);
	}
	
	function remove_uploaded_video ($in) {
		unlink($in);
	}
}