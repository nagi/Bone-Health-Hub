class OutboundLinks {
	constructor() {
		this.init();
	}

	init() {
		this.followButton = $('.follow-link-anchor');
		this.bigTextTag = $('#bigText');
		$('a.outbound').on('click', (event) => {
			event.preventDefault();
			this.showModal(event);
		});
	}

	showModal(event) {
		debugger
		let anchor = $(event.target);
		if (anchor.get(0).tagName !== 'A') {
			anchor = anchor.parents('a.outbound');
		}
		const destination = anchor.attr('href');
		const { bigText } = anchor.data();
		this.followButton
			.attr('href', destination)
			.find('.follow-link').text(destination);
		this.bigTextTag.text(bigText);
	}
}

export default OutboundLinks;
