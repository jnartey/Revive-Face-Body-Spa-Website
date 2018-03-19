<!-- File: /app/View/Roles/admin_add.ctp -->
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
				<h2><?php echo $current_page.' | '. substr($news['News']['title'], 0, strrpos(substr($news['News']['title'], 0, 30), ' '))."..."; ?> <a href="#"><?php echo $header; ?></a></h2>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-2 columns">
			<?php echo $this->element('admin'.DS.'news_menu'); ?>
		</div>
		<div class="large-10 columns content">
			<div class="main-content">
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
								
				if($news_parent['News']['category'] == ''){
					$options = array(
						'1' => 'News',
						'2' => 'Announcement',
						'3' => 'images & news'
					);
					echo $this->Form->input('type', array(
						'type'    => 'select',
						'options' => $options,
						'empty'   => false
					));
					echo '<br />';
					echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
					echo $this->Form->input('banner', array('type'=>'file', 'label'=>'Banner'));
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
				}
									
				echo $this->Form->end('Update'); 
			?>
			</div>
			</div>
		</div>
	</div>