<!-- modal -->
<div class="modal fade bone-modal" id="outbound-warning" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">You are being directed to the Thornton & Ross corporate website.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <p id="bigText" class="big"></p>

                <a class="follow-link-anchor" href="">
                    <div class="option">
                        <div>
                            <span class="cell">
                                <span class="link follow-link">Follow link</p>
                            </span>
                        </div>
                        <img src="<?php echo svg_path('arrow.svg'); ?>" class="arrow"></img>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->

<!-- modal -->
<div class="modal fade bone-modal" id="external-warning" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">You are being directed to an external website.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <a class="follow-link-anchor" href="" target="_blank">
                    <div class="option">
                        <div>
                            <span class="cell">
                                <span class="link follow-link">Follow link</p>
                            </span>
                        </div>
                        <img src="<?php echo svg_path('arrow.svg'); ?>" class="arrow"></img>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /modal -->
