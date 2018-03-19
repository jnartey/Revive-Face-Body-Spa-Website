$(window).load(function() {
	$('.drip-container').fadeOut(500);
	$(".container").show(500);
});

(function($) {
	
	$('a.link-push').on('click', function(){
		var target = $(this).attr('href');
		target = $(target).offset().top;
		TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
		return false;
	});
	
	// Prepare
    var History = window.History; // Note: We are using a capital H instead of a lower h
    if(!History.enabled ) {
         // History.js is disabled for this browser.
         // This is because we can optionally choose to support HTML4 browsers or not.
        return false;
    }
	
	/*function tabDeepLink(selector) {
	    $(selector).each(function() {
	        var $tabs = $(this);

	        // match page load anchor
	        var anchor = window.location.hash;
	        if (anchor.length && $tabs.find('[href="'+anchor+'"]').length) {
	            $tabs.foundation('selectTab', $(anchor));
	            // roll up a little to show the header
	            var offset = $tabs.offset();
	            $(window).load(function() {
	                $('html, body').animate({ scrollTop: offset.top }, 300);
	            });
	        }

	        // append the hash on click
	        $tabs.on('change.zf.tabs', function() {
	            var anchor = $tabs.find('.tabs-title.is-active a').attr('href');
	            history.pushState({}, "", anchor);
	        });
	    });
	}

	// turn this on for all the tabs or a subset
	tabDeepLink('.tabs');*/
	$('.drip-container').delay(4000).fadeOut(500);
	$(".container").delay(6000).show(800);
	
	var menu = $('.header .menu-wrap, .container .menu-wrap'),
		appointment = $('.header .appointment'),
		phone = $('.header .phone-wrap'),
		address = $('.header h6, .container h6'),
		socialMedia = $('.header .social-media'),
		socialMediaLinks = $('.header .social-media a'),
		closeButton = $('.close-button'),
		menuLinkContainter = $('.menu-links, .menu-links-ex'),
		menuLinks = $('.menu-links li, .menu-links-ex li'),
		tlHead = new TimelineMax({});
	
	$('body').on('click', '.menu-wrap', function(){
		
			tlHead
				.fromTo(menu, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}).add('intro')
				.fromTo(appointment, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
				.fromTo(phone, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
				.fromTo(address, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
				.fromTo(closeButton, 0.2, {y:-15, autoAlpha: 0, display:'block'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.fromTo(menuLinkContainter, 0.2, {y:-15, autoAlpha: 0, display:'block'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.staggerFrom(menuLinks, 0.5, {cycle: {
					x: [-45],
				}, autoAlpha: 0, ease:Power1.easeOut}, 0.2)
				.fromTo(socialMedia, 0.2, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.staggerFrom(socialMediaLinks, 0.2, {cycle: {
					x: [-25],
				}, autoAlpha: 1, ease:Power1.easeOut}, 0.2);
			
				$('.header').addClass('menu-opened');
				$('.container').addClass('menu-opened');
			
			return false;
	});
	
	$('body').on('click', '.close-button', function(){
		
			tlHead
				.fromTo(closeButton, 0.3, {y:0, autoAlpha: 1, display:'block'}, {y: -15, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
				.fromTo(menuLinkContainter, 0.3, {y:0, autoAlpha: 1, display:'none'}, {y: -15, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
				.fromTo(menu, 0.3, {x: -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}).add('intro')
				.fromTo(appointment, 0.3, {x: -45, autoAlpha: 0}, {x:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.fromTo(phone, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.fromTo(address, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
				.fromTo(socialMedia, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15');
				
				$('.header').removeClass('menu-opened');
				$('.container').removeClass('menu-opened');
		
			return false;
	});
	
	if($(".header, .container").hasClass("menu-opened")) {
		tlHead
			.fromTo(menu, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}).add('intro')
			.fromTo(appointment, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
			.fromTo(phone, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
			.fromTo(address, 0.2, {x: 0, autoAlpha: 1}, {x: -45, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
			.fromTo(closeButton, 0.2, {y:-15, autoAlpha: 0, display:'block'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.fromTo(menuLinkContainter, 0.2, {y:-15, autoAlpha: 0, display:'block'}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.staggerFrom(menuLinks, 0.5, {cycle: {
				x: [-45],
			}, autoAlpha: 0, ease:Power1.easeOut}, 0.2)
			.fromTo(socialMedia, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.staggerFrom(socialMediaLinks, 0.5, {cycle: {
				x: [-25],
			}, autoAlpha: 0, ease:Power1.easeOut}, 0.2);
	
			$('.header').addClass('menu-opened');
			$('.container').addClass('menu-opened');
	
		return false;
	}
	
	$(document).keyup(function(e) {
	    if(e.keyCode == 27) { 
		 if($(".header, .container").hasClass("menu-opened")) {
	 		tlHead
	 			.fromTo(closeButton, 0.3, {y:0, autoAlpha: 1, display:'block'}, {y: -15, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
	 			.fromTo(menuLinkContainter, 0.3, {y:0, autoAlpha: 1, display:'none'}, {y: -15, autoAlpha: 0, ease:Power1.easeOut}, '-=0.15')
	 			.fromTo(menu, 0.3, {x: -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}).add('intro')
	 			.fromTo(appointment, 0.3, {x: -45, autoAlpha: 0}, {x:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
	 			.fromTo(phone, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
	 			.fromTo(address, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			 	.fromTo(socialMedia, 0.3, {x:  -45, autoAlpha: 0}, {x: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15');		
	 			$('.header').removeClass('menu-opened');
				$('.container').removeClass('menu-opened');
		
	 		return false;
		 }
	   }
	});
	
	//Head & menu scroll animation
	var head = $('.header'),
		logo = $('.header .logo'),
		menu = $('.header .menu-wrap, .container .menu-wrap'),
		appointment = $('.header .appointment'),
		phone = $('.header .phone-wrap'),
		address = $('.header h6'),
		socialMedia = $('.header .social-media'),
		socialMediaLinks = $('.header .social-media a'),
		header = new TimelineMax({});

	var head_tween = header
			.fromTo(head, 0.3, {y: -20, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power4.easeOut}).add('intro')
			.fromTo(logo, 0.3, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.fromTo(menu, 0.2, {x: 0, autoAlpha: 0}, {x:0, autoAlpha: 1, ease:Power1.easeOut})
			.fromTo(appointment, 0.3, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.fromTo(phone, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.fromTo(address, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.fromTo(socialMedia, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
			.staggerFrom(socialMediaLinks, 0.5, {cycle: {
				x: [-15],
			}, autoAlpha: 0, ease:Power1.easeOut}, 0.2);
			
	// //Head & menu scroll animation
// 	var home = $('.container'),
// 		loader = $('.drip-container'),
// 		logo = $('.logo'),
// 		menu = $('.menu-wrap'),
// 		appointment = $('.appointment'),
// 		phone = $('.phone-wrap'),
// 		address = $('.container h6'),
// 		//socialMedia = $('.container .social-media'),
// 		//socialMediaLinks = $('.container .social-media a'),
// 		homer = new TimelineMax({});
//
// 	var home_tween = homer
// 			.fromTo(loader, 5, {y: 0, autoAlpha: 1}, {y: 0, autoAlpha: 0, ease:Power4.easeOut})
// 			.fromTo(home, 0.3, {y: -20, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power4.easeOut}).add('intro')
// 			.fromTo(logo, 0.3, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
// 			.fromTo(menu, 0.2, {x: 0, autoAlpha: 0}, {x:0, autoAlpha: 1, ease:Power1.easeOut})
// 			.fromTo(appointment, 0.3, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
// 			.fromTo(phone, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
// 			.fromTo(address, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
// 			//.fromTo(socialMedia, 0.3, {y:  -15, autoAlpha: 1}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
// 			;
//
	//Banner animation
	var mainContent = $('.main-content'),
		bannerI = $('#banner-i'),
		bannerIh3 = $('#banner-i h3'),
		bannerIp = $('#banner-i p'),
		bannerImore = $('#banner-i .more'),
		bannerII = $('#banner-ii'),
		bannerIIh3 = $('#banner-ii h3'),
		bannerIIp = $('#banner-ii p'),
		bannerIImore = $('#banner-ii .more'),
		bannerIII = $('#banner-iii'),
		bannerIIIh3 = $('#banner-iii h4'),
		bannerIIIp = $('#banner-iii h6'),
		bannerIIImore = $('#banner-iii .more'),
		appointment = $('.appointment'),
		phone = $('.phone-wrap'),
		address = $('.header h6, .container h6'),
		socialMedia = $('.header .social-media'),
		home_banner = new TimelineMax({});

	var home_banner_tween = home_banner
		.fromTo(mainContent, 0.2, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}).add('intro')
		.fromTo(bannerI, 0.4, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut})
		.fromTo(bannerIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerII, 0.4, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		.fromTo(bannerIIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIII, 0.4, {y: -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(bannerIIIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIIIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerIIImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15');
		
		
	//General animation
	var mainContent = $('.main-content'),
		banner = $('.banner_wrapper'),
		bannerH3 = $('.margin-border .inner .caption h3'),
		bannerH4 = $('.margin-border .inner .caption h4'),
		bannerh5 = $('.margin-border .inner .caption h5'),
		bannerh6 = $('.margin-border .inner .caption h6'),
		bannerP = $('.margin-border .inner .caption p'),
		bannerMore = $('.margin-border .inner .caption .more'),
		bannerLinkPush = $('.link-push'),
		tabItem = $('.tab-item'),
		general_load = new TimelineMax({});

	var general_tween = general_load
		.fromTo(banner, 0.4, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut})
		.fromTo(bannerH3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerH4, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerh5, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerh6, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.fromTo(bannerP, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		.fromTo(bannerMore, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		.fromTo(bannerLinkPush, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		.staggerFrom(tabItem, 1, {cycle: {
			x: 2, y: 2,
		}, autoAlpha: 0, ease:Quad.easeInOut}, 0.2, 'intro');
		

	var Inner = $('.inner'),
		banner = $('.banner_wrapper'),
		drawMargin = new TimelineMax();
		
	var line_tween = drawMargin
		  .set(Inner, {visibility:"visible"})
		  .fromTo(".l1", 1, {height:0}, {height:'100%'})
		  .fromTo(".l2", 4, {width:0}, {width:'100%'})
	      .fromTo(".l3", 1, {height:0}, {height:'100%'})
	      .fromTo(".l4", 1, {width:0}, {width:'100%'})
		  .timeScale(4);

	// init ScrollMagic Controller
	var controller = new ScrollMagic.Controller({
							globalSceneOptions: {
								triggerHook: "onEnter"
							}
						});

	// Scale Scene
	var banner_scene = new ScrollMagic.Scene({
	
	})
	.addTo(controller)
	.triggerHook("onEnter")
	.triggerElement(mainContent[0])
	.setTween(home_banner_tween);
	
	// General Scene
	var general_scene = new ScrollMagic.Scene({
	
	})
	.addTo(controller)
	.triggerHook("onEnter")
	.triggerElement(mainContent[0])
	.setTween(general_tween);
	
	// Draw line Scene
	var margin_scene = new ScrollMagic.Scene({
	
	})
	.addTo(controller)
	.triggerHook("onEnter")
	.triggerElement(mainContent[0])
	.setTween(line_tween);
	
    // Bind to StateChange Event
    History.Adapter.bind(window,'statechange',function() { // Note: We are using statechange instead of popstate
        var State = History.getState();
        //$('#main-content').load(State.url);
         //Instead of the line above, you could run the code below if the url returns the whole page instead of just the content (assuming it has a `#content`):
		 $.get(State.url, function(response) {
		     var d = document.createElement('div');
		     d.innerHTML = response;
		     $('#main-content').html($(d).find('#main-content').html()).promise().done(function(){
				$('a.link-push').on('click', function(){
					var target = $(this).attr('href');
					document.title = 'Revive Face & Beauty Spa - ' + $(d).find('title');
					target = $(target).offset().top;
					TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
					return false;
				});
				
			    $('body').on('click', '.tab-item a.more', function(evt){
					var url = $(this).attr('href');
					document.title = 'Revive Face & Beauty Spa - ' + $(d).find('title');
					var elem = url.substring(url.indexOf('#')+1);
			        $('#body-treatment-tabs').foundation('selectTab', '#' + elem);
					var target = '#' + elem;
					target = $(target).offset().top;
					TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
					return false;
			    });
				
				$(document).foundation();
			 });
			 
		 	//Banner animation
		 	var mainContent = $('.main-content'),
		 		bannerI = $('#banner-i'),
		 		bannerIh3 = $('#banner-i h3'),
		 		bannerIp = $('#banner-i p'),
		 		bannerImore = $('#banner-i .more'),
		 		bannerII = $('#banner-ii'),
		 		bannerIIh3 = $('#banner-ii h3'),
		 		bannerIIp = $('#banner-ii p'),
		 		bannerIImore = $('#banner-ii .more'),
		 		bannerIII = $('#banner-iii'),
		 		bannerIIIh3 = $('#banner-iii h4'),
		 		bannerIIIp = $('#banner-iii h6'),
		 		bannerIIImore = $('#banner-iii .more'),
		 		appointment = $('.appointment'),
		 		phone = $('.phone-wrap'),
		 		address = $('.header h6, .container h6'),
		 		socialMedia = $('.header .social-media'),
		 		home_banner = new TimelineMax({});

		 	var home_banner_tween = home_banner
		 		.fromTo(mainContent, 0.2, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}).add('intro')
		 		.fromTo(bannerI, 0.4, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut})
		 		.fromTo(bannerIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerII, 0.4, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		 		.fromTo(bannerIIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIII, 0.4, {y: -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		 		.fromTo(bannerIIIh3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIIIp, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerIIImore, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15');
				
		 	//General animation
		 	var banner = $('.banner_wrapper'),
		 		bannerH3 = $('.margin-border .inner .caption h3'),
		 		bannerH4 = $('.margin-border .inner .caption h4'),
		 		bannerh5 = $('.margin-border .inner .caption h5'),
		 		bannerh6 = $('.margin-border .inner .caption h6'),
		 		bannerP = $('.margin-border .inner .caption p'),
		 		bannerMore = $('.margin-border .inner .caption .more'),
		 		bannerLinkPush = $('.link-push'),
		 		tabItem = $('.tab-item'),
		 		general_load = new TimelineMax({});

		 	var general_tween = general_load
		 		.fromTo(banner, 0.4, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut})
		 		.fromTo(bannerH3, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerH4, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerh5, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerh6, 0.2, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		 		.fromTo(bannerP, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		 		.fromTo(bannerMore, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		 		.fromTo(bannerLinkPush, 0.2, {y:-15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.20')
		 		.staggerFrom(tabItem, 1, {cycle: {
		 			x: 2, y: 2,
		 		}, autoAlpha: 0, ease:Quad.easeInOut}, 0.2, 'intro');
		

		 	var Inner = $('.inner'),
		 		banner = $('.banner_wrapper'),
		 		drawMargin = new TimelineMax();
		
		 	var line_tween = drawMargin
		 		  .set(Inner, {visibility:"visible"})
		 		  .fromTo(".l1", 1, {height:0}, {height:'100%'})
		 		  .fromTo(".l2", 4, {width:0}, {width:'100%'})
		 	      .fromTo(".l3", 1, {height:0}, {height:'100%'})
		 	      .fromTo(".l4", 1, {width:0}, {width:'100%'})
		 		  .timeScale(4);
				  
			 });
	 });
	 
//Head & menu scroll animation
var home1 = $('.container'),
	loader1 = $('.drip-container'),
	logo1 = $('.container .logo'),
	menu1 = $('.container .menu-wrap'),
	appointment1 = $('.container .appointment'),
	phone1 = $('.container .phone-wrap'),
	address1 = $('.container h6'),
	socialMedia1 = $('.container .social-media'),
	socialMediaLinks1 = $('.container .social-media a'),
	homer = new TimelineMax({});

var home_tween = homer
		//.fromTo(loader1, 2, {y: 0, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power4.easeOut})
		.fromTo(home1, 0.5, {y: -20, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power4.easeOut}, '+=0.15').add('intro')
		.fromTo(logo1, 0.5, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(menu1, 0.5, {x: 0, autoAlpha: 0}, {x:0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(appointment1, 0.3, {y: -15, autoAlpha: 0}, {y:0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(phone1, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(address1, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		.fromTo(socialMedia1, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '+=0.15')
		//.fromTo(socialMediaLinks, 0.3, {y:  -15, autoAlpha: 0}, {y: 0, autoAlpha: 1, ease:Power1.easeOut}, '-=0.15')
		.staggerFrom(socialMediaLinks1, 0.5, {cycle: {
			x: [-15],
		}, autoAlpha: 0, ease:Power1.easeOut}, 0.2);

    // Capture all the links to push their url to the history stack and trigger the StateChange Event
    $('ul.menu-links li a').click(function(evt) {
        evt.preventDefault();
		$('ul.menu-links li a').removeClass('active')
		$(this).addClass('active');
        History.pushState(null, $(this).text(), $(this).attr('href'));
		
		var target = $('#main-content');
		target = $(target).offset().top;
		TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
		return false;
    });
	
    $('ul.menu li a').click(function(evt) {
        evt.preventDefault();
		$('ul.menu li a').removeClass('active')
		$(this).addClass('active');
        History.pushState(null, $(this).text(), $(this).attr('href'));
		
		var target = $('#main-content');
		target = $(target).offset().top;
		TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
		return false;
    });
	
    $('body').on('click', '.ext-link', function(evt){
        evt.preventDefault();
		// $('ul.menu-links li a').removeClass('active')
// 		$(this).addClass('active');
        History.pushState(null, $(this).text(), $(this).attr('href'));
		
		var target = $('#main-content');
		target = $(target).offset().top;
		TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
		return false;
    });
	
    $('body').on('click', '.tab-item a.more', function(evt){
		var url = $(this).attr('href');
		var elem = url.substring(url.indexOf('#')+1);
        $('#body-treatment-tabs').foundation('selectTab', '#' + elem);
		var target = '#' + elem;
		target = $(target).offset().top;
		TweenMax.to($(window), 1, {scrollTo:{y:target, autoKill: true}, ease:Power3.easeOut});
		return false;
    });
	
})(jQuery);

$(document).foundation();
