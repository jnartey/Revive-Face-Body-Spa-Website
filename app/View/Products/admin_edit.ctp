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
				<?php echo $current_page.' | '. strip_tags($product['Product']['name']); ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'product_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php 
			echo $this->Session->flash(); 
			echo '<div class="large-12 columns">';
			echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
			echo '</div>';
			echo '<div class="large-12 columns">';
			echo $this->Form->create('Product', array('type' => 'file'));
			// echo "<p><label>feature</label>";
// 			echo $this->Form->checkbox('featured', array('value' => 1));
// 			echo "</p>";
			// $options_s = array(
// 				'Sold Out' => 'Sold Out',
// 				'Out of Stock' => 'Out of Stock',
// 				'Not Available' => 'Not Available',
// 			);
//
// 			echo $this->Form->input('product_status', array(
// 				'type'    => 'select',
// 				'options' => $options_s,
// 				'empty'   => true
// 			));
// 			echo '<br />';
			echo $this->Form->input('name', array('placeholder'=>'Name'));
			echo $this->Form->input('category_id', array('class' => 'form-control'));
			echo '<br />';
			// $options = array(
// 	        	'&#36;' => 'USD',
// 	        	'&#163;' => 'GBP',
// 				'&#8373;' => 'GHS',
// 				'&#128;' => 'EUR'
// 	        );
//
// 	        echo $this->Form->input('currency', array(
// 	        	'type'    => 'select',
// 	        	'options' => $options,
// 	        	'empty'   => false
// 	        ));
// 			echo '<br />';
// 			echo $this->Form->input('price', array('placeholder'=>'Price'));
// 			echo $this->Form->input('product_items', array('placeholder'=>'Product Items'));
			echo $this->Form->textarea('description', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Description'));
			echo '<br />';
			echo $this->Form->input('product_image', array('type'=>'file', 'label'=>'Product Image'));
			
			//echo $this->Form->hidden('cid', array('value'=>$rev));
			echo $this->Form->end('Update'); 
			?>
		</div>
	</div>
</div>
