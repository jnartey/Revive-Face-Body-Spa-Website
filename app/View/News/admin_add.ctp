<script>
	$(function() {
		//datepicker
		$('.event-date').datepick({ 
		    yearRange: '2000:2050',
			dateFormat: 'yyyy-mm-dd',
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
		<?php echo $this->element('admin'.DS.'news_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="large-12 columns">
			<?php
				if($news_parent['News']['category']):
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'news', 'action'=>'view', $news_parent['News']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
				else:
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'news', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
				endif;
			?><br /><br />
			<?php
				echo $this->Form->create('News', array('type' => 'file'));
				if(!$rev){
					// $options = array(
// 						'1' => 'News',
// 						'2' => 'Announcement',
// 						'3' => 'images & news'
// 					);
// 					echo $this->Form->input('type', array(
// 						'type'    => 'select',
// 						'options' => $options,
// 						'empty'   => false
// 					));
// 					echo '<br />';
					echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
					echo $this->Form->input('banner', array('type'=>'file', 'label'=>'Banner'));
					echo $this->Form->hidden('add_news', array('value'=>1));
				}elseif($news_parent['News']['type'] == 3){
					echo $this->Form->input('news_date', array('type' => 'text', 'class'=>'event-date', 'label'=>false, 'placeholder'=>'Date'));
					echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
					echo $this->Form->input('summary', array('label'=>false, 'placeholder'=>'Summary'));
					echo '<br />';
					echo $this->Form->textarea('story', array('class'=>'ckeditor'));
					echo '<br />';
					echo $this->Form->input('image', array('type'=>'file', 'label'=>'Image'));
					echo $this->Form->input('image_1', array('type'=>'file', 'label'=>'Image 1'));
					echo $this->Form->input('image_2', array('type'=>'file', 'label'=>'Image 2'));
					echo $this->Form->hidden('type', array('value'=>$news_parent['News']['type']));
					echo $this->Form->hidden('category', array('value'=>$news_parent['News']['id']));
					echo $this->Form->hidden('add_news', array('value'=>1));
				}else{
					echo "<p><label>Publish</label>";
					echo $this->Form->checkbox('publish', array('value' => 1));
					echo "</p>";
					// if($news_parent['News']['category']){
// 						echo $this->Form->input('category', array(
// 							'type'    => 'select',
// 							'options' => $news_list,
// 							'empty'   => false
// 						));
// 						echo '<br />';
// 					}
				
					echo $this->Form->input('news_date', array('type' => 'text', 'class'=>'event-date', 'label'=>false, 'placeholder'=>'Date'));
					echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
					echo $this->Form->input('summary', array('label'=>false, 'placeholder'=>'Summary'));
					echo '<br />';
					echo $this->Form->textarea('story', array('class'=>'ckeditor'));
					echo '<br />';
					echo $this->Form->input('image', array('type'=>'file', 'label'=>'Image'));
					echo $this->Form->hidden('type', array('value'=>$news_parent['News']['type']));
					echo $this->Form->hidden('category', array('value'=>$news_parent['News']['id']));
					echo $this->Form->hidden('add_news', array('value'=>1));
				}
				
				echo $this->Form->hidden('cid', array('value'=>$rev));
		 		echo $this->Form->end('Add'); ?>
		</div>
	</div>
</div>
