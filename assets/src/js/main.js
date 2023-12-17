import General from './_generalScripts';
import GateKeeper from './_gateKeeper';
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

		initGateKeeper();
		const generalScripts = new General();
	}
}

document.addEventListener('DOMContentLoaded', () => {
	App.init();

	// eslint-disable-next-line no-undef
	scrollCue.init();
});


