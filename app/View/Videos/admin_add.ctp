<script>
	$(function() {
		//datepicker
		$('.report-date').datepick({ 
		    yearRange: '2000:2050', 
			showTrigger: '#calImg'});
	});
</script>
<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page; ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'video_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="large-7 columns">
			<div class="row">
				<?php
					if($item_parent[0]['Video']['category']):
						echo $this->Html->link(__(("cancel"), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
					else:
						echo $this->Html->link(__(("cancel"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
					endif;
				?>
			</div><?php
							echo $this->Form->create('Video', array('type' => 'file'));
							
							echo '<div class="large-12 columns">';
							echo "<p><label>YouTube</label>";
							echo $this->Form->input('name', array('label'=>false, 'placeholder'=>'Name'));
							echo $this->Form->input('youtube_link', array('label'=>false, 'placeholder'=>'YouTube Link'));
							echo '</div>';
							
							echo '<div class="large-12 columns">';
							echo '<br />';
							echo $this->Form->hidden('cid', array('value'=>''));
						 	echo $this->Form->end('Add'); 
							echo '</div>';
						?>
		</div>
	</div>
</div>
