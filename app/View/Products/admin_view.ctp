<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page.strip_tags($product_parent['Product']['name']); ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns admin-left-panel">
		<?php echo $this->element('admin'.DS.'product_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="twelve columns">
			<?php 
				if($product_parent['Product']['category']):
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'products', 'action'=>'view', $product_parent['Product']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary')); 
				else:
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'products', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary'));
				endif;
			
				echo $this->Html->link(__(("Add"), true), array('controller'=> 'products', 'action'=>'add', $product_parent['Product']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				echo $this->Html->link(__("Add Image", true), array('controller'=> 'products', 'action'=>'add_image', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small success'));
					echo $this->Html->link(__(("Edit"), true), array('controller'=> 'products', 'action'=>'edit', $product['Product']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				if($product_parent['Product']['category']){
					echo $this->Form->postLink(__("Delete", true), array('controller'=> 'products', 'action'=>'delete', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small alert'), sprintf(__('Are you sure you want to delete '.$product['Product']['name'].'?', true), $product['Product']['id'])); 
				}
			?>
		</div>
		<div class="large-10 columns">
			<div class="panel">
				<?php
					echo '<p><strong>'.__('Product Title: ').'</strong><br /></p>'; 
					echo $product['Product']['name'].'<br />';
					if($product['Product']['description']){
						echo '<p><strong>'.__('Description').'</strong></p>'; 
						echo $product['Product']['description'].'<br /><br />';
					}
					
					if($product['Product']['product_image']){
						echo $this->html->image('products'.DS.'thumb'.DS.'small'.DS.$product['Product']['product_image'], array('name' => ''));
					}
				?>
			</div>
		</div>
		<div class="large-12 columns">
			<?php if($products){ ?>
			<table cellspacing="0">
				<thead>
					<tr>
						<th>
							<?php echo $this->Paginator->sort('name');?>
						</th>
						<th>
							<?php echo __('Actions');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($products as $product):
					?>
					<tr>
						<td>
							<?php 
							echo $this->Html->image("products".DS."thumb".DS."small".DS.$product['Product']['product_image'], array("alt" => "",
						/*'url' => array('controller' => 'images', 'action' => 'view', $image['Image']['id'])*/)).'&nbsp;&nbsp;';
								echo $product['Product']['name']; 
							?>
						</td>
						<td class="actions">
							<?php 
								$collect = AppController::getChildren('Product', 'category', $product['Product']['id']);
								if($collect){
									$count = '('.count($collect).')';
								}else{
									$count = null;
								}
								
								echo $this->Html->link(__(("Edit"), true), array('controller'=> 'products', 'action'=>'edit_image', $product['Product']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny secondary'));
								if(isset($product_parent) && !empty($product)){
									echo $this->Form->postLink(__("Delete", true), array('controller'=> 'products', 'action'=>'delete', $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny alert'), sprintf(__('Are you sure you want to delete '.$product['Product']['name'].'?', true), $product['Product']['id']));
								}
								
								// if($product['Product']['default'] == 1){
// 									echo '<span class="button tiny secondary">Default</span>';
// 								}else{
// 									echo " ".$this->Form->postLink(__("Set default", true), array('controller'=> 'products', 'action'=>'set_default',  $product['Product']['category'], $product['Product']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny primary'), sprintf(__('Are you sure you want to set this page as default?', true), $product['Product']['id']));
// 								}
							?>
						</td>
					</tr><?php endforeach; ?>
				</tbody>
			</table><?php } ?>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="pagination">
					<?php 
						echo '<span class="unavailable">&laquo;</span>'.$this->Paginator->prev(__('prev', true), array(), null, array('class'=>'unavailable'));
						echo $this->Paginator->numbers();
						echo $this->Paginator->next(__('next', true), array(), null, array('class'=>'unavailable')).'<span class="unavailable">&raquo;</span>';
					?>
				</div>
			</div>
		</div>
	</div>
</div>
