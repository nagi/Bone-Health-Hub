import Cookies from 'js-cookie';

class GateKeeper {
	constructor() {
		window.Cookies = Cookies; // Used by JS called by "Redirection for Contact Form 7" plugin
		this.modalView = $('#gateKeeperModal');
		this.byobu = $('#hcps-only');
		this.gateLocked = true;

		this.init();
	}

	static visitorIsNotHCP() {
		return Cookies.get('HCP') !== 'HCP';
	}

	static visitorIsABot() {
		return !!navigator.userAgent.match(/Bot/);
	}

	checkCookie() {
		if (GateKeeper.visitorIsABot()) {
			this.setCookie();
			return;
		}

		if (GateKeeper.visitorIsNotHCP()) {
			this.gateLocked = true;
			this.modalView.modal('show');
		} else {
			this.gateLocked = false;
		}
	}

	setCookie() {
    // For live; expires after session
	// Cookies.set('HCP', 'HCP');

    var inFifteenSeconds = new Date(new Date().getTime() + 1500 * 1000);
		Cookies.set('HCP', 'HCP', { expires: inFifteenSeconds });

		this.gateLocked = false;
		this.modalView.modal('hide');
		this.byobu.css('filter', 'none');
	}

	init() {
		$('#HCP').on('click', () => this.setCookie());

		this.checkCookie();
	}
}

export default GateKeeper;
