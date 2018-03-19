<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>New Categories</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'category_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<div class="large-12 columns">
		<?php
			echo $this->Html->link(__(("cancel"), true), array('controller'=> 'categories', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
			echo $this->Form->postLink(__("Delete", true), array('controller'=> 'categories', 'action'=>'delete', $category['Category']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small alert right'), sprintf(__('Are you sure you want to delete '.$category['Category']['name'].'?', true), $category['Category']['id']));
		?>
		</div>
		<div class="large-12 columns">
        <?php echo $this->Form->create('Category'); ?>
        <?php echo $this->Form->input('id'); ?>
        <br />
        <?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'empty' => true)); ?>
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->hidden('slug', array('class' => 'form-control')); ?>
        <br />
        <?php echo $this->Form->input('description', array('id'=>'editor', 'class' => 'form-control')); ?>
		<?php echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content')); ?>
        <br />
		<?php
			echo $this->Form->input('image', array('type'=>'file', 'label'=>'Image'));
			echo '<br />';
		?>
        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>
		</div>
    </div>
</div>