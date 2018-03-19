<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page; ?> <a href="#"><?php echo strip_tags($header); ?></a>
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
				if($parent['PageContent']['id']):
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'view', $parent['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
				else:
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
				endif;
			echo '</div>';
			echo '<div class="large-12 columns">';
			echo $this->Form->create('PageContent', array('type' => 'file'));
			echo $this->Form->input('title', array('placeholder'=>'Title'));
			echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
			echo '<br />';
			echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
			echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
			echo $this->Form->hidden('page_style', array('value' => $parent['PageContent']['page_style']));

			echo $this->Form->hidden('cid', array('value'=>$rev));
			echo $this->Form->end('Add'); 
		?>
		</div>
	</div>
</div>