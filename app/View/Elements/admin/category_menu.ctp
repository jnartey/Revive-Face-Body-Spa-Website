<ul class="accordion">
    <li id="one">
        <a href="#one" class="active">Action<span></span></a>
        <ul class="sub-menu">
			<li><?php echo $this->Html->link(__(('Categories'), true), array('controller'=> 'categories', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-default')); ?></li>
			<li><?php echo $this->Html->link(__(('New Category'), true), array('controller'=> 'categories', 'action' => 'add', 'admin' => true), array('class' => 'btn btn-default')); ?></li>
        </ul>
	</li>
    <!-- <li id="two">
        <a href="#two" class="active">Categories<span></span></a>
        <ul class="sub-menu">
			<?php echo $this->Tree->generate($categoriestree, array('element' => 'categories/tree_item', 'class' => 'categorytree', 'id' => 'categorytree')); ?>
        </ul>
	</li> -->
</ul>