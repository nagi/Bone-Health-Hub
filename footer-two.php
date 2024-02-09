	<?php
	global $bone_health_job_number;
	global $bone_health_product;
	?>

	<!--=== Start Information Area ===-->
	<div class="information-area">
		<div class="container">
			<div class="information-content text-center" x-data-cues="slideInUp">
				<p class="dis-two">
					<strong>Reporting of side effects</strong> If you get any side effects, talk to your doctor,
					pharmacist or nurse. This includes any possible side effects not listed in the
					package leaflet. You can also report side effects directly via the Yellow Card
					Scheme at <a href="https://yellowcard.mhra.gov.uk" target="_blank">https://yellowcard.mhra.gov.uk</a>.
					By reporting side effects, you can help provide more information on the safety of this medicine.
				</p>
				<p class="dis-three pb-5"><?php echo $bone_health_job_number ?> &nbsp; &nbsp; | &nbsp; &nbsp;  Date of Preparation February 2024</p>
			</div>
		</div>
	</div>
	<!--=== End Information Area ===-->

	<!--=== Start Footer Area ===-->
	<div class="footer-area bg-color-f4f4f4 pt-30 pb-30">
		<div class="container">
			<div class="row align-items-end" x-data-cues="slideInUp">
				<div class="pb-3 col-lg-4 col-sm-6 col-md-4">
					<div class="single-footer">
						<ul class="ps-0 mb-0">
							<li>
								<a href="https://www.thorntonross.com/privacy-policy" target="_blank">Privacy Policy</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="pb-3 col-lg-4 col-sm-12 col-md-4">
					<div class="single-footer pt-md-4 px-2">
						<div href="#" class="d-block text-md-center">
							<img class="footer-logo-patient" src="<?php echo img_dir (); ?>/logo-4.png" alt="footer-logo">
						</div>
					</div>
				</div>
				<div class="pb-3 col-lg-4 col-sm-12 col-md-4">
					<div class="single-footer d-sm-flex justify-content-lg-end">
						<ul class="ps-0 mb-0">
							<li>
								<a href="https://www.thorntonross.com/terms-conditions" target="_blank">Terms and Conditions</a>
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
<?php get_template_part('partials/gate-keeper-modal-patient'); ?>
<?php get_template_part('partials/outbound-warning-modal'); ?>
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
