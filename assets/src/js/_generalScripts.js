
class General {
	constructor() {
		this.makeNavSticky();
		this.accordion();
	}

	makeNavSticky() {
		$(window).on('scroll', () => {
			if ($(this).scrollTop() > 150) {
				$('.navbar').addClass('is-sticky');
			} else {
				$('.navbar').removeClass('is-sticky');
			}
		});
	}

	accordion() {
		$('.faq-item .faq-head').on('click', function () {
			$(this).parent().toggleClass('active').find('.faq-body').slideToggle();
			$(this).parent().siblings().removeClass('active').find('.faq-body').slideUp();
		});
	}
}

export default General;
