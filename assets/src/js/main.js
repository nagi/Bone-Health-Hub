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

(function ($) {
	/** <<=== Header Sticky JS ==>>* */
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 150) {
			$('.navbar').addClass('is-sticky');
		} else {
			$('.navbar').removeClass('is-sticky');
		}
	});

	$('.scroll-btn, .navbar .navbar-nav li a').on('click', function (e) {
		const anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - 100
		}, 100);
		e.preventDefault();
	});

	$('.navbar .navbar-nav li a').on('click', () => {
		$('.navbar-collapse').collapse('hide');
	});

	/** <<=== scrollCue JS ==>>* */
	scrollCue.init();
}(jQuery));
