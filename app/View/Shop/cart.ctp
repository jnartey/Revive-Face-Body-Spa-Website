<?php echo $this->set('title_for_layout', 'Shopping Cart'); ?>
<?php echo $this->element('head'); ?>

<?php echo $this->Html->script(array('cart.js'), array('inline' => false)); ?>

<div class="large-12 columns content-white misc reset-symbol cart-details">

<?php if(empty($shop['OrderItem'])) : ?>

Shopping Cart is empty

<?php else: ?>

<?php 
	echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'cartupdate'))); 
?>

<div class="row">
	<?php
		echo $this->Session->flash(); 
		echo '<div class="large-12 columns bread-crumps">';
		echo $this->Html->link(__(("Merchandise"), true), array('controller'=> 'pages', 'action'=>'merchandise', 'admin' => false), array('escape' => false, 'class'=>''));
		echo ' <span class="fa fa-angle-right"></span> ';
		echo $this->Html->link(__(('Shopping Cart'), true), array('controller'=> 'shop', 'action'=>'cart', 'admin' => false), array('escape' => false, 'class'=>''));
		echo '</div>';
	?>
</div>

<hr>

<div class="row">
    <div class="small-1 columns"><span class="heading">#</span></div>
    <div class="small-7 columns"><span class="heading">ITEM</span></div>
    <div class="small-1 columns"><span class="heading">PRICE</span></div>
    <div class="small-1 columns"><span class="heading">QUANTITY</span></div>
    <div class="small-1 columns"><span class="heading">SUBTOTAL</span></div>
    <div class="small-1 columns"><span class="heading">REMOVE</span></div>
</div>

<?php $tabindex = 1; ?>
<?php foreach ($shop['OrderItem'] as $key => $item): ?>

    <div class="row" id="row-<?php echo $key; ?>">
        <div class="small-1 columns">
			<?php 
				$child =  AppController::getParent('Product', 'category', $item['Product']['id']);
				echo $this->Html->image('products'.DS.'thumb'.DS.'small'.DS.$child['Product']['product_image'], array('alt' => 'okuntakinte', 'class'=>'')); 
			?></div>
        <div class="small-7 columns">
            <span class="description">
				<?php 
					echo '<div class="large-12 columns r-pad">';
					echo $this->Html->link($item['Product']['name'], array('controller' => 'pages', 'action' => '#', 'slug' => $item['Product']['slug'])).'<br />'; 
					echo '</div>';
					echo '<div class="small-1 columns c-label r-pad">';
					echo '<strong>Size:</strong>'.$item['Product']['size'];
					echo '</div>';
					echo '<div class="small-2 columns float-left r-pad size-select">';
					$options = array(
			        	'S' => 'S',
			        	'M' => 'M',
						'L' => 'L',
						'XL;' => 'XL'
			        );
			        echo $this->Form->input('size-' . $key, array(
			        	'type'    => 'select',
			        	'options' => $options,
			        	'empty'   => false,
						'maxlength' => 2, 
						'tabindex' => $tabindex++, 
						'data-id' => $item['Product']['id'],
						'value'	  => $item['Product']['size'],
						'label'=>false,
						'div' => false
			        ));
					echo '<br />';
					echo '</div>';
				?>
			</span>
            <?php
            $mods = 0;
            if(isset($item['Product']['productmod_name'])) :
            $mods = $item['Product']['productmod_id'];
            ?>
            <br />
            <small><?php echo $item['Product']['productmod_name']; ?></small>
            <?php endif; ?>
        </div>
        <div class="small-1 columns" id="price-<?php echo $key; ?>"><?php echo $item['Product']['currency'].$item['Product']['price']; ?></div>
        <div class="small-1 columns"><?php echo $this->Form->input('quantity-' . $key, array('div' => false, 'class' => 'numeric form-control input-small', 'label' => false, 'size' => 2, 'maxlength' => 2, 'tabindex' => $tabindex++, 'data-id' => $item['Product']['id'], 'data-mods' => $mods, 'value' => $item['quantity'])); ?></div>
        <div class="small-1 columns" id="subtotal_<?php echo $key; ?>"><?php echo $item['Product']['currency'].$item['subtotal']; ?></div>
        <div class="small-1 columns text-center">
        	<?php
        		echo '<a href="'.$this->Html->url(DS.'shop'.DS.'remove'.DS.$key, true).'" class="fa fa-remove remove delete" id="'.$key.'"></a>';
        	?>
        </div>
    </div>
	<hr>
<?php endforeach; ?>

<div class="row">
    <div class="small-12 columns">
        <div class="pull-right">
        <?php echo $this->Html->link('<i class="fa fa-ban"></i> &nbsp; Clear Shopping Cart', array('controller' => 'shop', 'action' => 'clear'), array('class' => 'button alert', 'escape' => false)); ?>
        &nbsp;
        <?php echo $this->Form->button('<i class="fa fa-calculator"></i> &nbsp; Update', array('class' => 'button primary', 'escape' => false));?>
        <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col col-sm-12 pull-right tr">
        <strong>Subtotal:</strong> <span class="normal" id="subtotal"><?php echo $item['Product']['currency'].$shop['Order']['subtotal']; ?></span>
        <br />
        <strong>Sales Tax:</strong> <span class="normal">N/A</span>
        <br />
        <strong>Shipping:</strong> <span class="normal">N/A</span>
        <br />
        <strong>Order Total:</strong> <span class="red" id="total"><?php echo $item['Product']['currency'].$shop['Order']['total']; ?></span>
        <br />

        <?php //echo $this->Html->link('<i class="fa fa-check"></i> &nbsp; Checkout', array('controller' => 'shop', 'action' => 'address'), array('class' => 'button success', 'escape' => false)); ?>

        <br />

        <?php echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'step1'))); ?>
        <input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal' class="sbumit" />
        <?php echo $this->Form->end(); ?>

    </div>
</div>

<br />
<br />

<?php endif; ?>
</div>
<?php echo $this->element('footer'); ?>

