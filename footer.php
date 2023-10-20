	<?php
	global $bone_health_job_number;
	?>

	<!--=== Start Information Area ===-->
	<div class="information-area">
		<div class="container">
			<div class="information-content text-center" x-data-cues="slideInUp">
				<span class="d-block title semibold">Information</span>
				<p class="dis-one text-center">For information on our products please visit <a href="https://www.medicines.org.uk/emc/company/2554" target="_blank">EMC</a>,
					https://www.medicines.org.uk/emc/ and search the product for a Summary of Product Characteristics</p>
				<p class="dis-two">Adverse events should be reported. Reporting forms and information can be found at:
					www.mhra.gov.uk/yellowcard. Adverse events should also be reported to Thornton and Ross Limited by
					emailing thorntonross@medinformation.co.uk or by calling 01484 848164</p>
				<p class="dis-three pb-5"><?php echo $bone_health_job_number ?> &nbsp; &nbsp; | &nbsp; &nbsp;  Date of Preparation September 2023</p>
			</div>
		</div>
	</div>
	<!--=== End Information Area ===-->

	<!--=== Start Footer Area ===-->
	<div class="footer-area bg-color-f4f4f4 pt-70 pb-70">
		<div class="container">
			<div class="row align-items-center" x-data-cues="slideInUp">
				<div class="col-lg-4 col-sm-6 col-md-4">
					<div class="single-footer">
						<ul class="ps-0 mb-0">
							<li>
								<a href="/fultium">Fultium</a>
							</li>
							<li>
								<a href="/accrete">Accrete</a>
							</li>
							<li>
								<a href="/binosto">Binosto</a>
							</li>
							<li>
								<a href="https://stadaspecialtybiosimilars.co.uk/movymia/" target="_blank">Movymia<span class="movy-tri">▼</span></a>
							</li>
							<li>
								<a href="https://www.thorntonross.com/contact-us" target="_blank">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-md-4">
					<div class="single-footer py-4">
						<div href="#" class="d-block text-md-center">
							<img src="<?php echo img_dir (); ?>/logo-4.png" alt="footer-logo">
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-md-4">
					<div class="single-footer d-sm-flex justify-content-lg-end">
						<ul class="ps-0 mb-0">
							<li>
								<a href="https://www.thorntonross.com/privacy-policy" target="_blank">Privacy Policy</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/thornton-&-ross/" target="_blank">LinkedIn</a>
							</li>
							<li>
								<a href="https://www.thorntonross.com/data-protection-notice" target="_blank">Data Protection Notice</a>
							</li>
							<li>
								<a href="https://www.thorntonross.com/terms-conditions" target="_blank">Terms and Conditions</a>
							</li>
							<li>
								<a href="https://www.thorntonross.com/adverse-event-reporting" target="_blank">Adverse Event Reporting</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Footer Area ===-->

	<!--=== Start Copyright Area ===-->
	<div class="copyright-area text-md-end text-center">
		<div class="container">
			<p>Thornton & Ross is a member of the STADA Group <span class="ms-sm-5"> © Copyright Thornton & Ross 2023</span></p>
		</div>
	</div>
	<!--=== End Copyright Area ===-->

	</div>
	<!--=== End Wrapper ===-->

	<!--=== Start Modals ===-->
<?php get_template_part('partials/gate-keeper-modal'); ?>
<?php get_template_part('partials/crm-modal'); ?>
	<!--=== End Modals ===-->

	<?php wp_footer(); ?>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script> -->
	
	<!--=== Start address lookup scripts ===-->
	<script>
		if(!!$('.wpcf7').length) { // Looking for Contact Form 7 form
			(function() {
				IdealPostcodes.AddressFinder.setup({
						apiKey: "ak_l1yyyagtRtL66EZaHha06pnILaAwk",
						outputFields: {
						line_1: "#streetAddress",
						line_2: "#streetAddress2",
						post_town: "#city",
						postcode: "#postCode",
					}
				});
			})()
		}
	</script>
	<!--=== End address lookup scripts ===-->

</body>

</html>