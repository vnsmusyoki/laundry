(function ($) {
	'use strict';
	
	// preloader js
	function loader() {
		$(window).on('load', function () {
			$('#ctn-preloader').addClass('loaded');
			$("#loading").fadeOut(500);
			// Una vez haya terminado el preloader aparezca el scroll

			if ($('#ctn-preloader').hasClass('loaded')) {
				// Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
				$('#preloader').delay(900).queue(function () {
					$(this).remove();
				});
			}
		});
	}
	loader();

    $(window).on("load", function() {
		background();
	});

    // background image js
	function background() {
			var img=$('.bg_img');
			img.css('background-image', function () {
			var bg = ('url(' + $(this).data('background') + ')');
			return bg;
		});
	}

	// Activate homepage slider
	var slider = $('.homepage-slide');
	slider.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		smartSpeed: 800,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop: true,
		slideSpeed: 3000,
		nav: true,
		dots: false,
		navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
		//autoplay: true,
	});

	slider.on('translate.owl.carousel', function () {
		var layer = $("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).removeClass('animated ' + s_animation).css('opacity', '0');
		});
	});

	$("[data-delay]").each(function () {
		var animation_del = $(this).data('delay');
		$(this).css('animation-delay', animation_del);
	});

	$("[data-duration]").each(function () {
		var animation_dur = $(this).data('duration');
		$(this).css('animation-duration', animation_dur);
	});

	slider.on('translated.owl.carousel', function () {
		var layer = slider.find('.owl-item.active').find("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).addClass('animated ' + s_animation).css("opacity", "1");
		});
	});
	
	// active mobile-menu
	jQuery('#mobile-menu').meanmenu({
		meanScreenWidth: '991',
		meanMenuContainer: '.mobile-menu'
	});

	// service-carousel-3 active
	$('#service-carousel-3').owlCarousel({
		loop: true,
		smartSpeed: 800,
		nav: true,
		dots: true,
		margin: 30,
		navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
		//autoplay: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				margin: 0
			},
			576: {
				items: 2
			},
			992: {
				items: 3
			}
		}
	});

	// Activate scroll to top
	$("#scroll-top").on('click', function () {
		$('html , body').animate({
			scrollTop: 0
		}, 1000);
	});

	// Nice select
	$('select').niceSelect();

	// offcanvas menu
	$(".menu-tigger").on("click", function () {
		$(".extra-info,.offcanvas-overly").addClass("active");
		return false;
	});
	$(".menu-close,.offcanvas-overly").on("click", function () {
		$(".extra-info,.offcanvas-overly").removeClass("active");
	});

	// Activate lightcase
	$('a[data-rel^=lightcase]').lightcase();
	
	// gallery-carousel active
	$('.project-carousel').owlCarousel({
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: false,
		margin: 30,
		stagePadding: 130,
		//autoplay: true,
		responsiveClass: true,
		center: true,
		responsive: {
			0: {
				items: 1,
				stagePadding: 0,
				margin: 0,
			},
			992: {
				items: 2,
				stagePadding: 65,
				margin: 20,
			},
			1500: {
				items: 3,
			}
		}
	});

	// Active brand carousel
	$('.brand-carousel').owlCarousel({
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: false,
		margin: 30,
		//autoplay: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				margin: 0
			},
			576: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			},
			1500: {
				items: 5
			}
		}
	});

	// Active brand carousel
	$('.testimonial-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: true,
		//autoplay: true,
	});

	// Active brand carousel
	$('.cta-slider').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		dots: true,
		//autoplay: true,
	});

	// Active Odometer Counter 
	$('.odometer').appear(function (e) {
		var odo = $(".odometer");
		odo.each(function () {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

	// Search Js
	var $searchWrap = $('.search-wrap');
	var $navSearch = $('.search-trigger');
	var $searchClose = $('#search-close');

	$('.search-trigger').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).addClass("open");
	});

	$('.search-close').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).removeClass("open");
	});

	function closeSearch() {
		$searchWrap.fadeOut(200);
		$navSearch.add($searchClose).removeClass("open");
	}

	$(document.body).on('click', function (e) {
		closeSearch();
	});

	$(".search-trigger, .main-search-input").on('click', function (e) {
		e.stopPropagation();
	});

	// offcanvas menu
	$(".hamburger-menu-trigger").on("click", function () {
		$(".extra-info,.offcanvas-overly").addClass("active");
		return false;
	});
	$(".menu-close,.offcanvas-overly").on("click", function () {
		$(".extra-info,.offcanvas-overly").removeClass("active");
	});

	// isotop active
	$('.row-portfolio').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.row-portfolio').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-sizer'
			}
		});

		// filter items on button click
		$('.portfolio-filter').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

	});

	//for menu active class
	$('.portfolio-filter button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	// showlogin toggle function
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	// showcoupon toggle function
	$('#showcoupon').on('click', function () {
		$('#checkout_coupon').slideToggle(900);
	});

	// Create an account toggle function
	$('#cbox').on('click', function () {
		$('#cbox_info').slideToggle(900);
	});

	// Create an account toggle function
	$('#ship-box').on('click', function () {
		$('#ship-box-info').slideToggle(1000);
	});

	// InHover Active 
	$('.single-pricing-box').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.single-pricing-box').removeClass('active');
	});

	$('.single-process-box').on('mouseenter', function () {
		$(this).addClass('active').parent().siblings().find('.single-process-box').removeClass('active');
	});

	$(".wcu-box-2").on('mouseenter', function () {
		$(".wcu-box-2").removeClass("active");
		$(this).addClass("active");
	});

	// js - tilt
	if ($(".js-tilt").length) {
		$('.js-tilt').tilt();
	}

	// postbox_gallery active
	$('.post_gallery').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		dots: false,
		nav: true,
		navText: ["<i class='fal fa-arrow-left'></i>", "<i class='fal fa-arrow-right'></i>"],
		dots: false,
		//autoplay: true,
	});

	// Activate counter 
	$('.counter').countUp({
		'time': 1000,
		'delay': 10
	});

	// Active wow js
	new WOW().init();

	// scrollToTop
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 200, // Animation in speed (ms)
		animationOutSpeed: 200, // Animation out speed (ms)
		scrollText: '<i class="fas fa-chevron-up"></i>', // Text for element
		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	});

	// map active
	function basicmap() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 13,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(23.7031006, 90.4596732), // New York
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"stylers": [{
					"hue": "#AADAFF"
				}]
			}, {
				"featureType": "road",
				"elementType": "labels",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [{
					"lightness": 100
				}, {
					"visibility": "simplified"
				}]
			}]
		};
		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('contact-map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(23.7031006, 90.4596732),
			map: map,
			icon: "assets/images/icons/map-marker.png",
			title: 'Cryptox'
		});
	}
	if ($('#contact-map').length != 0) {
		google.maps.event.addDomListener(window, 'load', basicmap);
	}

	

})(jQuery);