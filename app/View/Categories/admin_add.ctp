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
		?>
		</div>
		<div class="large-12 columns">
        <?php echo $this->Form->create('Category', array('type' => 'file')); ?>
        <br />
        <?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'empty' => true)); ?>
        <br />
        <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
        <br />
        <?php //echo $this->Form->input('slug', array('class' => 'form-control')); ?>
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