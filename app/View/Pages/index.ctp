<div class="drip-container"><div class="drip"></div></div>
<div class="large-12 columns container text-center">
    <button class="close-button" type="button">
      <span aria-hidden="true">&times;</span>
    </button>

	<a class="logo" href="<?php echo $this->Html->url(DS, true); ?>">
		<?php echo $this->Html->image('logo.jpg', array('alt' => 'Revive Face & Body Spa')); ?>
	</a>
	<div class="large-12 menu-wrap">
		<a class="m-icon" href="#"></a><br />
		<span>menu</span>
	</div>
	
	<ul class="large-12 menu-links-ex">
		<li <?php if($title_for_layout === "About Us"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>About Us'), true), array('controller'=> 'pages', 'action'=>'about-us'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Dermalogica skin treatment (Facials)"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Dermalogica skin treatment (Facials)'), true), array('controller'=> 'pages', 'action'=>'dermalogica-skin-treatment'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Dermalogica MicroZone&reg; Treatments (Mini Facials)"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Dermalogica MicroZone&reg; Treatments (Mini Facials)'), true), array('controller'=> 'pages', 'action'=>'microzone'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Dermalogica Thermal body therapy treatments"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Dermalogica Thermal body therapy treatments'), true), array('controller'=> 'pages', 'action'=>'dtbt-treatments'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Diamond Microdermabrasion"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Diamond Microdermabrasion'), true), array('controller'=> 'pages', 'action'=>'diamond-microdermabrasion'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Body Treatment"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Body Treatment'), true), array('controller'=> 'pages', 'action'=>'body-treatment'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Nails"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Nails'), true), array('controller'=> 'pages', 'action'=>'nails'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Hair Removal"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Hair Removal'), true), array('controller'=> 'pages', 'action'=>'hair-removal'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Eye Treatment"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Eye Treatment'), true), array('controller'=> 'pages', 'action'=>'eye-treatment'), array('escape' => false)); ?>
		</li>
		<li <?php if($title_for_layout === "Packages"){ echo "class='active'"; } ?>>
			<?php echo $this->Html->link(__(('<span class="hidden-title">Revive Face & Body Spa - </span>Packages'), true), array('controller'=> 'pages', 'action'=>'packages'), array('escape' => false)); ?>
		</li>
	</ul>
	
	<div class="appointment">
		<?php
			if($download['PageContent']['file']){
				echo '<a class="button custom" href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$download['PageContent']['file'], true).'" target="_blank"><span class="fa fa-download"></span>&nbsp; <span>'.$download['PageContent']['title'].'</span></a>';
			}else{
				echo '<a class="button custom" href="#"><span class="fa fa-download"></span>&nbsp; <span>'.$download['PageContent']['title'].'</span></a>';
			}
			
		?>
	</div>
	<div class="large-12 phone-wrap">
		<span class="phone"><?php echo $phone['PageContent']['content'] ?></span><br />
		<span class="line"></span><br /><br />
		<span class="phone"><?php echo $email['PageContent']['content'] ?></span><br />
	</div>
	<?php echo $address['PageContent']['content'] ?>
	
	<div class="phone-wrap google-maps">
		<span class="phone"><a href="https://www.google.com.gh/maps/place/Revive+Face+%26+Body+Spa/@5.6470407,-0.1519629,15z/data=!4m2!3m1!1s0x0:0xb2b7b3f7b13269ff?sa=X&ved=0ahUKEwiLlorqwoPSAhUTM8AKHTtJD9cQ_BIIZDAK" target="_blank">Find us on google maps</a></span>
	</div>

	<div class="social-media">
		<a class="fa fa-facebook fa-2x" href="https://www.facebook.com/revivefaceandbody" target="_blank"></a>
		<a class="fa fa-instagram fa-2x" href="https://www.instagram.com/revivefaceandbodyspa" target="_blank"></a>
	</div>

	<div class="copyright">
		<p>Copyright &copy; Revive Face And Body Spa. All rights reserved. Website by <a href="#" target="_blank">fifthlightmedia</a></p>
	</div>
	<div class="hidden-img">
		<?php echo $this->Html->image('img-1.jpg', array('alt' => 'Revive Face & Body Spa')); ?>
	</div>
</div>