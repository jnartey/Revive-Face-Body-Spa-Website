<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php 
	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	$isiPhone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');

if($isiPad){ ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8, user-scalable=no" />
<?php }else { ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="HandheldFriendly" content="True" />
<?php } ?>
	<meta name="description" content="Revive Face and Body Spa is a dedicated spa boutique, offering a range of esthetic, therapeutic and enhanced facials and body treatments that will revitalize and re-energize your skin and body."/>
	<meta name="author" content="Fifthlight Media"/>
	<meta name="keywords" content=""/>
	
	
	<?php echo $this->Html->charset(); ?>
	<title><?php echo "Revive Face & Body Spa - ".$title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('foundation.css');
		echo $this->Html->css('app.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('admin'.DS.'style.css');
	?>
	
	<!-- LayerSlider stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->Html->url(DS.'layerslider'.DS.'css'.DS.'layerslider.css', true); ?>" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'jquery.fancybox.css?v=2.1.5', true); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-thumbs.css?v=1.0.7', true); ?>" />
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- special IE-only canvas fix -->
	<!--[if IE]><script type="text/javascript" src="<?php echo $this->Html->url(DS.'js'.DS.'vendor'.DS.'excanvas.js', true); ?>"></script><![endif]-->
	</script>
</head>
<body>
	<?php 
		echo $this->fetch('content'); 
		echo $this->element('admin'.DS.'menu');
		
		echo $this->Html->script('vendor'.DS.'jquery');
		echo $this->Html->script('vendor'.DS.'what-input');
		echo $this->Html->script('vendor'.DS.'foundation');
		echo $this->Html->script(DS.'greensock-js'.DS.'TweenMax.min.js');
		echo $this->Html->script(DS.'greensock-js'.DS.'plugins'.DS.'ScrollToPlugin.min');
		echo $this->Html->script(DS.'greensock-js'.DS.'plugins'.DS.'CSSPlugin.min');
		echo $this->Html->script(DS.'greensock-js'.DS.'easing'.DS.'EasePack.min');
		echo $this->Html->script(DS.'scrollmagic'.DS.'ScrollMagic.min');
		echo $this->Html->script(DS.'scrollmagic'.DS.'plugins'.DS.'animation.gsap.min');
		echo $this->Html->script('vendor'.DS.'jquery.history');
		echo $this->Html->script('app');
		
		//echo $this->Html->script('foundation.min');
	?>
	<script src="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'jquery.fancybox.js?v=2.1.5', true); ?>"></script>
	
	<!-- Add Thumbnail helper -->
	<script type="text/javascript" src="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-thumbs.js?v=1.0.7', true); ?>"></script>
	<?php
		echo $this->Html->script('app');
		echo $this->Html->script('admin'.DS.'fancybox');
	?>
</body>
</html>
