<?php
global $bone_health_job_number;
global $bone_health_product;
?>

<div class="modal fade" id="gateKeeperModal" role="dialog" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content rounded-4 p-5">

    <div class="xc-popup-section active" id="c-popup-section-1">
        <!-- <div class="c-popup-overlay"></div> -->
        <div class="xc-popup-wrapper">
            <div class="c-popup-content">
                <!-- <div class="c-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                    </svg>
                </div> -->
                <div class="p-logo">
                    <img src="<?php echo img_dir(); ?>/h-<?php echo $bone_health_product?>-logo.png" alt="logo">
                </div>
                <div class="item">
                    <div class="text">
                        <p>
                            The information on our patient website is solely intended for UK patients prescribed this
                            medicine
                            by a UK Healthcare Professional.
                        </p>
                    </div>
                    <div class="read-more">
                        <a id="HCP">I confirm I am a UK patient</a>
                    </div>
                </div>
                <div class="item">
                    <div class="text">
                        <p>
                            Information for Healthcare Professionals is found on our dedicated Healthcare Professional
                            site which is solely intended for UK Healthcare Professionals and contains promotional
                            information.
                        </p>
                    </div>
                    <div class="read-more">
                        <a href="/">I confirm I am a UK Healthcare Professional</a>
                    </div>
                </div>
                <div class="info">
                    <p>All other visitors: Please view the Summary of Product Characteristics</p>
                    <p><?php echo $bone_health_job_number ?>a | Date of Preparation December 2023</p>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
