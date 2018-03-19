<?php 
	echo $this->element('head'); 
	echo '<div id="main-content" class="main-content"><div class="large-12 columns banner-wrapper" data-equalizer data-equalize-on="small">';
	echo '<div class="large-12 columns margin-border" data-equalizer-watch><div class="inner">';
	echo '<span class="l1"></span><span class="l2"></span><span class="l3"></span><span class="l4"></span>';
	echo '<div class="caption">';
	echo '<h3>'.$content['PageContent']['sub_title'].'</h3><br />';
	$children = AppController::getChildren('PageContent', 'category', $content['PageContent']['id']);
	echo $content['PageContent']['content'];
	if($children){
		echo '<a class="fa fa-angle-double-down fa-3x link-push" href="#start"></a>';
	}
	echo '</div></div></div>';
	echo '<div class="large-12 columns bg-banner" data-equalizer-watch>';
	echo '<div class="large-12 columns banner" style="background-image:url('.$this->Html->url(DS.'img'.DS.'pages'.DS.'thumb'.DS.'large'.DS.$content['PageContent']['banner'], true).');">';
	echo '<div class="overlay"></div>';
	echo '</div></div></div>'; 
	
	if($children){
		echo '<div id="start" class="large-12 columns text-left">';
		$i = 1;
		foreach($children as $child):
			if($i%2 == 0){
				echo '<div class="large-12 columns content-img bg-white"><div class="large-12 columns text">';
				echo '<h4>'.$child['PageContent']['title'].'</h4>';
				echo '<h5>'.$child['PageContent']['sub_title'].'</h5><br />';
				echo $child['PageContent']['content'];
				echo '</div></div>';
			}else{
				echo '<div class="large-12 columns content-img"><div class="large-12 columns text">';
				echo '<h4>'.$child['PageContent']['title'].'</h4>';
				echo '<h5>'.$child['PageContent']['sub_title'].'</h5><br />';
				echo $child['PageContent']['content'];
				echo '</div></div>';
			}
			$i++;
		endforeach;
		echo '</div>';
	}
	echo '</div>';
	
	echo $this->element('footer'); 
?>