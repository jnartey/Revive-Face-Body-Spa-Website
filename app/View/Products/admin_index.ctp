	<div class="row">
		<div class="large-12 columns">
			<div class="module yellow">
				<h2><?php echo $current_page; ?> <a href="#"><?php echo $header; ?></a></h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-2 columns">
			<?php echo $this->element('admin'.DS.'product_menu'); ?>
		</div>
		<div class="large-10 columns content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Html->link(__(("+ Add New Product"), true), array('controller'=> 'products', 'action'=>'add', 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); ?><br />
			<table  cellspacing="0">
			    <thead>
			<tr>
				<th><?php echo $this->Paginator->sort('title');?></th>
				<th><?php echo __('Actions'); ?></th>
			</tr>
			    </thead>
			    <tbody>
			<?php
			foreach ($products as $product):
			?>
				<tr>
					<td>
						<?php 
							$gallery =  AppController::getParent('Gallery', 'link_id', $product['Product']['id']);
							$Count = AppController::countRows('Image', 'gallery_id', $gallery['Gallery']['id']);
							$pageCount = $Count;
							echo '<span class="count">'.$pageCount.'</span> '.$product['Product']['name']; 
						?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link(__("View", true), array('controller'=> 'products', 'action'=>'view', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny primary')); ?>
						<?php echo $this->Html->link(__("Edit", true), array('controller'=> 'products', 'action'=>'edit', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny secondary')); ?>
						<?php 
							if($gallery){
								echo $this->Html->link(__("Add Image", true), array('controller'=> 'galleries', 'action'=>'view', $gallery['Gallery']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny success'));
							}
						?>
						<?php echo $this->Form->postLink(__("Delete", true), array('controller'=> 'products', 'action'=>'delete', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny alert'), sprintf(__('Are you sure you want to delete '.$product['Product']['name'].'?', true), $product['Product']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			    </tbody>
			</table>
			<br />
			<div class="pagination">
				<?php echo '<span class="unavailable">&laquo;</span>'.$this->Paginator->prev(__('prev', true), array(), null, array('class'=>'unavailable'));?>
			 	<?php echo $this->Paginator->numbers();?>
				<?php echo $this->Paginator->next(__('next', true), array(), null, array('class'=>'unavailable')).'<span class="unavailable">&raquo;</span>';?>
			</div>
		</div>
	</div>