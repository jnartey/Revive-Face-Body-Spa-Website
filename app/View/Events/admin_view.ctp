<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page.$event_parent[0]['Event']['title']; ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-3 columns">
		<?php echo $this->element('admin'.DS.'event_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="large-12 columns">
			<?php 
									echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'events', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary'));
								?><?php echo $this->Html->link(__(("Edit"), true), array('controller'=> 'events', 'action'=>'edit', $event['Event']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); ?><?php 
										echo $this->Form->postLink(__("Delete", true), array('controller'=> 'events', 'action'=>'delete', $event['Event']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small alert'), sprintf(__('Are you sure you want to delete '.$event['Event']['title'].'?', true), $event['Event']['id'])); 
								?>
		</div>
		<div class="separator"></div>
		<div class="large-10 columns">
			<div class="panel">
				<p>
					<strong><?php echo __('Event Title: '); ?></strong> <?php echo $event['Event']['title']; ?><br />
					<br />
					<strong><?php echo __('Event Content: ') ?></strong> <?php echo $event['Event']['content']; ?><br />
					<?php if($event['Event']['event_image']){?><br />
					<strong><?php __('Event Image'); ?></strong><br />
					<?php echo $this->Html->image('events'.DS.'thumb'.DS.'large'.DS.$event['Event']['event_image'], array('title' => '')); ?><br />
					<br>
					<?php } ?>
				</p>
			</div>
		</div>
</div>
