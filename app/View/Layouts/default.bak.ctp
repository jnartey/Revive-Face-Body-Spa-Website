<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
<?php 
	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	$isiPhone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');

if($isiPad){ ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8, user-scalable=no" />
<?php }else { ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
<?php } ?>
	<meta name="description" content="Ghana Power Compact will directly support the energy sector strategic objectives to achieve power supply sufficiency including exports to neighboring countries, and also supply power for new oil and gas based industries."/>
	<meta name="author" content="Fifthlight Media"/>
	<meta name="keywords" content="Ghana Power Compact, Compact II, ECG, ECG Financial and Operational Turnaround Project, NEDCo  Financial and Operational Turnaround Project, Regulatory Strengthening and Capacity Building Project, Access Project, Power Generation Sector Improvement Project, Energy Efficiency and Demand side Management Project, Monitoring and Evaluation, Environmental and Social Performance, Social and Gender Integration"/>
	
	
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Millennium Development Authority (MiDA) - Ghana Power Compact'; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('foundation.css');
		echo $this->Html->css('normalize.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('360player.css');
		echo $this->Html->css('flashblock.css');
		echo $this->Html->css('admin'.DS.'style.css');
		echo $this->Html->css('style.css');
	?>
	<!-- LayerSlider stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->Html->url(DS.'nivoslider'.DS.'themes'.DS.'default'.DS.'default.css', true); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $this->Html->url(DS.'nivoslider'.DS.'nivo-slider.css', true); ?>" type="text/css" media="screen" />
	<!-- LayerSlider stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->Html->url(DS.'layerslider'.DS.'css'.DS.'layerslider.css', true); ?>" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'jquery.fancybox.css?v=2.1.5', true); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-thumbs.css?v=1.0.7', true); ?>" />
	<?php
		echo $this->Html->script('vendor'.DS.'modernizr');
		echo $this->Html->script('vendor'.DS.'jquery');
		echo $this->Html->script('vendor'.DS.'berniecode-animator');
		echo $this->Html->script('vendor'.DS.'soundmanager2');
		echo $this->Html->script('vendor'.DS.'360player');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- special IE-only canvas fix -->
	<!--[if IE]><script type="text/javascript" src="<?php echo $this->Html->url(DS.'js'.DS.'vendor'.DS.'excanvas.js', true); ?>"></script><![endif]-->

	<script type="text/javascript">
	soundManager.setup({
	  // path to directory containing SM2 SWF
	  url: "<?php echo $this->Html->url(DS.'swf'.DS, true); ?>"
	});
	</script>
	<script>
		var channelName = 'Mida Gh';

		$('document').ready(function(){
			$.get(
				"https://www.googleapis.com/youtube/v3/channels",{
					part: 'contentDetails',
					forUsername: channelName,
					key: 'AIzaSyCt1XOEHQme6qujDGoeuy2tPZF0-5nNElI'},
					function(data){
						$.each(data.items, function(i, item){
							console.log(item);
							pid = item.contentDetails.relatedPlaylists.uploads;
							getVideos(pid);
						})
					}
			);

			function getVideos(pid){
				$.get(
					"https://www.googleapis.com/youtube/v3/playlistItems",{
						part: 'snippet',
						maxResults: 50,
						playlistId: pid,
						key: 'AIzaSyCt1XOEHQme6qujDGoeuy2tPZF0-5nNElI'},
						function(data){
							if (data.items.length != 0) {
								var html = ['<div class="images-box">'];
								$.each(data.items, function(i, item){
									console.log(item);
									var videoTitle = item.snippet.title;
									var shortTitle = item.snippet.title.substr(0, 42) + '...';
									var published = new Date(item.snippet.publishedAt.substr(0, 4), item.snippet.publishedAt.substr(5, 2) - 1, item.snippet.publishedAt.substr(8, 2)).toLocaleDateString();
									var videoId = item.snippet.resourceId.videoId;
									var thumbnailUrl = item.snippet.thumbnails.medium.url;
									var playerUrl = 'https://www.youtube.com/embed/' + videoId + '?rel=0&autoplay=0&loop=0';

									html.push('<a class="load-yt image-thumbs-1 fancybox.iframe" rel="arh-yt-group" title="<span class=\'yt-date\'>published: ', published, '</span><br /><span class=\'yt-title\'>', videoTitle, '</span>" href="', playerUrl, '"><div class="image-hold"><img src="', thumbnailUrl, '" alt="the african regent" /></div><span>', shortTitle, '</span></a>');

									//Append results to list
									//$('#results').append(output);
								});

								html.push('</div>');
							}else{
								var html = ['<p>No videos available</p>'];
							}

							document.getElementById('yt-list').innerHTML = html.join('');
						}
				);
			}
		
			$('.load-yt').each(function() {
			        var $this = $(this);
			        $this.data('title', $this.attr('title')).prop('title', null);
			    });
		});
	</script>	
</head>
<body>
	<?php 
		echo $this->element('head');
		echo $this->fetch('content'); 
		echo $this->element('footer');
		echo $this->element('admin'.DS.'menu'); 
		
		echo $this->Html->script('vendor'.DS.'fastclick');
		echo $this->Html->script('vendor'.DS.'jquery.form');
		echo $this->Html->script('vendor'.DS.'jquery.validate');
		echo $this->Html->script('foundation.min');
	?>
	<script src="<?php echo $this->Html->url(DS.'layerslider'.DS.'js'.DS.'greensock.js', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'layerslider'.DS.'js'.DS.'layerslider.transitions.js', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'layerslider'.DS.'js'.DS.'layerslider.kreaturamedia.jquery.js', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'nivoslider'.DS.'jquery.nivo.slider.pack.js', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'jquery.fancybox.js?v=2.1.5', true); ?>"></script>
	
	<!-- Add Thumbnail helper -->
	<script type="text/javascript" src="<?php echo $this->Html->url(DS.'fancybox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-thumbs.js?v=1.0.7', true); ?>"></script>
	<?php
		echo $this->Html->script('admin'.DS.'fancybox');
	?>
    
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'af,de,el,fr,it,en,nl,zh-CN,es', layout: 		google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
		$('document').ready(function(){
			
			jQuery("#layerslider-m").layerSlider({
				responsive: false,
				responsiveUnder: 1024,
				layersContainer: 1024,
				hoverPrevNext: false,
				navPrevNext: false,
				navStartStop: false,
				navButtons: false,
				pauseOnHover :false,
				thumbnailNavigation: 'disabled',
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});
			
			jQuery("#layerslider").layerSlider({
				responsive: false,
				responsiveUnder: 373,
				layersContainer: 373,
				hoverPrevNext: true,
				navPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled',
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});

			jQuery("#layerslider-1").layerSlider({
				responsive: false,
				responsiveUnder: 683,
				layersContainer: 683,
				hoverPrevNext: true,
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});

			jQuery("#news-slider").layerSlider({
				responsive: false,
				autoStart: true,
				responsiveUnder: 341,
				layersContainer: 341,
				showCircleTimer: false,
				hoverPrevNext: false,
				navPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled',
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});

			jQuery("#procurement-slider").layerSlider({
				responsive: false,
				autoStart: true,
				responsiveUnder: 311,
				layersContainer: 311,
				showCircleTimer: false,
				hoverPrevNext: false,
				navPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled',
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});
			
			jQuery("#documents-slider").layerSlider({
				responsive: false,
				autoStart: true,
				responsiveUnder: 311,
				layersContainer: 311,
				showCircleTimer: false,
				hoverPrevNext: false,
				navPrevNext: false,
				navStartStop: false,
				thumbnailNavigation: 'disabled',
				skinsPath: "<?php echo $this->Html->url(DS.'layerslider'.DS.'skins'.DS, true); ?>"
			});
			
			$('.photo-gallery').fancybox({
				padding : 0,
				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					},
					overlay: {
					    locked: false
					}
				}
			});
			
			$(".video-gallery").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					padding : 0,
					fitToView	: false,
					width		: '80%',
					height		: '80%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none',
					helpers : {
						overlay: {
						    locked: false
						}
					}
				});
		});
		
		$(window).load(function() {
	        $('#slider ').nivoSlider({
				effect: 'slideInLeft',
				directionNav: true,
				controlNav: false,
				pauseTime: 5000,
				manualAdvance: false
			});
			
	        $('#events').nivoSlider({
				effect: 'slideInLeft',
				directionNav: true,
				controlNav: false,
				pauseTime: 5000,
				manualAdvance: false
			});
			
			$('#slider-1').nivoSlider({
				effect: 'fade',
				directionNav: true,
				controlNav: false,
				manualAdvance: true
			});
	    });
	
		$('#prev-photo, #next-photo').on('click', function (e) {

	         // Prevent the link from being followed
	         e.preventDefault();

	         // Initialize variables 
	         var buttonId = this.id,
	          buttonClass = ('previousButton' == buttonId) ? '.nivo-prevNav' : '.nivo-nextNav';
				
	         // Trigger the slider button
	         $('#slider .nivo-directionNav').find(buttonClass).click();
	    });
		
		$('#prev-event, #next-event').on('click', function (e) {

	         // Prevent the link from being followed
	         e.preventDefault();

	         // Initialize variables 
	         var buttonId = this.id,
	          buttonClass = ('previousButton' == buttonId) ? '.nivo-prevNav' : '.nivo-nextNav';
				
	         // Trigger the slider button
	         $('#events .nivo-directionNav').find(buttonClass).click();
	    });
		
		// On Search Submit and Get Results
		function search() {
		    var query_value = $('input#search').val();
		    $('.search-string').html(query_value);
		    if(query_value !== ''){
		        $.ajax({
		            type: "POST",
		            url: "<?php echo $this->Html->url(DS.'pages'.DS.'search', true); ?>",
		            data: { query: query_value },
		            cache: false,
		            success: function(html){
		                $("ul#results").html(html);
		            }
		        });
		    }return false;
		}
	
		$("input#search").on("keyup", function(e) {
		    // Set Timeout
		    clearTimeout($.data(this, 'timer'));

		    // Set Search String
		    var search_string = $(this).val();
			
			if(search_string == ''){
				search_string = $("input#search").val();
			}
					
		    // Do Search
		    if(search_string == '') {
		        $(".results-wrap").fadeOut();
				$('h4#results-text').fadeOut();
		    }else{
		        $(".results-wrap").fadeIn();
				$('h4#results-text').fadeIn();
		        $(this).data('timer', setTimeout(search, 100));
		    };
			
			e.preventDefault();
		});
		
		// On Search Submit and Get Results
		function more_search() {
		    var query_value = $('input#more-search').val();
		    $('.search-string').html(query_value);
		    if(query_value !== ''){
		        $.ajax({
		            type: "POST",
		            url: "<?php echo $this->Html->url(DS.'pages'.DS.'ajax_search', true); ?>",
		            data: { query: query_value },
		            cache: false,
		            success: function(html){
		                $("ul#results-i").html(html);
		            }
		        });
		    }return false;
		}
	
		$("input#more-search").on("keyup", function(e) {
		    // Set Timeout
		    clearTimeout($.data(this, 'timer'));

		    // Set Search String
		    var search_string = $(this).val();
			
			if(search_string == ''){
				search_string = $("input#more-search").val();
			}
					
		    // Do Search
		    if(search_string == '') {
		        $(".results-wrap-i").fadeOut();
				$('h4#results-text').fadeOut();
		    }else{
		        $(".results-wrap-i").fadeIn();
				$('h4#results-text').fadeIn();
		        $(this).data('timer', setTimeout(more_search, 100));
		    };
			
			e.preventDefault();
		});
		
		$('body').click(function(){
			$(".results-wrap").fadeOut();
		});
		
		$(".search-close").click(function(){
		    $(".results-wrap").fadeOut();
		});
		
		/*$('document').ready(function() {
			$(".accordion-navigation a").click(function() {
				$(".accordion-navigation a").parent().attr( 'id', '');
				$(this).parent().attr( 'id', 'top');
				var target = '.accordion #top';
				var actualHeight = $(this).parent().outerHeight(true);
				alert(actualHeight);
			    $('html, body').animate({
			        scrollTop: $(target).offset().top - actualHeight
			    }, 800);
			});
		});*/

      $(document).foundation({
		  accordion: {
	        callback : function () {
				var containerPos = $('.accordion .active').offset().top;
				$('html, body').animate({ scrollTop: containerPos - 100 }, 800);
	        }
	      }
      });
    </script>
	
</body>
</html>
