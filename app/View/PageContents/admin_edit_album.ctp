<script>
	$(function() {
		//datepicker
		$('.publish-date').datepick({ 
		    yearRange: '2000:2050',
			dateFormat: 'yyyy-mm-dd',
			showTrigger: '#calImg'});
	});
</script>
<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page.' | '. strip_tags($page['PageContent']['title']); ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'page_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php 
			echo $this->Session->flash(); 
			echo '<div class="large-12 columns">';
				if($page['PageContent']['category']):
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'view', $page['PageContent']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
				else:
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
				endif;
			echo '</div>';
			echo '<div class="large-12 columns">';
			echo $this->Form->create('PageContent', array('type' => 'file'));
			echo $this->Form->input('title', array('placeholder'=>'Title'));
			echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
			echo '<br /><br />';
							
			echo $this->Form->end('Update');
		?>
		</div>
	</div>
</div>
