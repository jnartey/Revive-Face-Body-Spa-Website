<ul class="accordion">
    <li id="one">
		<?php $pageCount = AppController::countRows("Author"); ?>
        <a href="#one" <?php if($header == "Authors"){echo 'class="active"';} ?>>Merchants<span>+</span></a>

        <ul class="sub-menu">
			<li><?php echo $this->Html->link(__(("<em>01</em>List Authors<span>$pageCount</span>"), true), array('controller'=> 'authors', 'action'=>'index', 'admin' => true), array('escape' => false)); ?></li>
			<li><?php echo $this->Html->link(__(("<em>02</em>Add New Author<span>+</span>"), true), array('controller'=> 'authors', 'action'=>'add', 'admin' => true), array('escape' => false)); ?></li>
        </ul>
	</li>
</ul>