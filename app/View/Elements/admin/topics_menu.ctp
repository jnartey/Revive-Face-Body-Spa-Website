<ul class="accordion">
    <li id="one">
		<?php $pageCount = AppController::countRows("Topic"); ?>
        <a href="#one" <?php if($header == "Topics"){echo 'class="active"';} ?>>Topics<span>+</span></a>

        <ul class="sub-menu">
			<li><?php echo $this->Html->link(__(("<em>01</em>List Topics<span>$pageCount</span>"), true), array('controller'=> 'topics', 'action'=>'index', 'admin' => true), array('escape' => false)); ?></li>
			<li><?php echo $this->Html->link(__(("<em>02</em>Add New Topic<span>+</span>"), true), array('controller'=> 'topics', 'action'=>'add', 'admin' => true), array('escape' => false)); ?></li>
        </ul>
	</li>
</ul>