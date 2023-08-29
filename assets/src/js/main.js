import General from './_generalScripts';

const App = {

	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		initGeneral();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});

(function($) {

	'use strict';

	/**
	 	<=={Master JS}==>
	 	01 Header Sticky JS
		02 Mobile Menu JS
		03 Go Top JS
		04 Preloader JS
		05 scrollCue JS
		06 Services Slide JS
		07 Case Slide JS
		08 Testimonial Slide JS
		09 Partner Slide JS
		10 Partner Slide JS
		11 Counter JS
		12 Popup JS
		13 Password JS
		14 Curt BTN JS
		15 Background Image JS
	**/
	
	/**<<=== 01 Header Sticky JS ==>>**/
	$(window).on('scroll', function() {
		if ($(this).scrollTop() >150){  
			$('.navbar').addClass("is-sticky");
		}
		else{
			$('.navbar').removeClass("is-sticky");
		};
	});
	
	$('.scroll-btn, .navbar .navbar-nav li a').on('click', function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - 100
		}, 100);
		e.preventDefault();
	});
	$('.navbar .navbar-nav li a').on('click', function(){
		$('.navbar-collapse').collapse('hide');
	});

	/**<<=== 04 Preloader JS ==>>**/
	$(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	}) 

	/**<<=== 05 scrollCue JS ==>>**/
	scrollCue.init();

	// Hero Slider JS
	$('.hero-slider').owlCarousel({
		items:1,
		loop: true,
		margin: 0,
		nav: true,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		navText: [
			"<img src='assets/images/slide-left.png'>",
			"<img src='assets/images/slide-right.png'>",
		],
	});

})(jQuery);
