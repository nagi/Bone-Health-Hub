class OutboundLinks {
	constructor() {
		this.init();
	}

	init() {
		this.followButton = $('.follow-link-anchor');
		$('a.outbound').on('click', (event) => {
			event.preventDefault();
			this.showModal(event);
		});
	}

	showModal(event) {
		let anchor = $(event.target);
		if (anchor.get(0).tagName !== 'A') {
			anchor = anchor.parents('a.outbound');
		}
		const destination = anchor.attr('href');
		this.followButton.attr('href', destination)
		$("#outbound-warning").modal('show')
	}
}

export default OutboundLinks;
