
class General {
	constructor() {
		this.makeNavSticky();
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
}

export default General;
