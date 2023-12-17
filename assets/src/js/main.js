import General from './_generalScripts';
import GateKeeper from './_gateKeeper';
import OutboundLinks from './_outboundLinks';
import '@popperjs/core';
import 'bootstrap';

class App {
	/**
	 * App.init
	 */
	static init() {
		// General scripts
		function initGateKeeper() {
			return new GateKeeper();
		}
		new OutboundLinks;
		initGateKeeper();
		const generalScripts = new General();
	}
}

document.addEventListener('DOMContentLoaded', () => {
	App.init();

	// eslint-disable-next-line no-undef
	scrollCue.init();
});

/*
setTimeout(function () {
    $('#c-popup-section-1').addClass('active');
}, 1000);

$('.c-popup-section .c-close,.c-popup-section .c-popup-overlay').on('click', function (e) {
    e.preventDefault();
    $('.c-popup-section').removeClass('active');
});

$('.open-adverse').on('click', function (e) {
    e.preventDefault();
    $('#c-popup-section-2').addClass('active');
});
*/