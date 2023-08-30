<?php
/**
 * Template Name: Home
 * Description: The template for displaying the home page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

	<!--=== Start Banner Area ===-->
	<div class="hero-slider-wrap position-relative">
		<div class="hero-slider-area hero-slider owl-carousel-disabled owl-theme">
			<div class="hero-slider-item bg-1">
				<div class="container">
					<div class="banner-content">
						<h2>Bone Health Hub</h2>
						<p>Preventing Fractures. Preserving Resources.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-down">
			<a href="#prevention">
				<span class="d-block">Scroll to learn more about <br> our product range</span>
				<img src="<?php echo img_dir (); ?>/down.png" alt="down">
			</a>
		</div>

		<div class="stay-in-touch-wrap z-1">
			<a href="#" class="stay-in-touch">Stay in touch!</a>
		</div>
	</div>
	<!--=== End Banner Area ===-->

	<!--=== Start Preventing Area ===-->
	<div class="preventing-area top-shape">
		<div class="container">
			<div class="global-side-wrap">
				<div class="row align-items-center">
					<div class="col-xxl-6" data-cues="slideInLeft">
						<div class="preventing-img-1">
							<img src="<?php echo img_dir (); ?>/img-1.png" alt="img-1">
						</div>
					</div>
					<div class="col-xxl-6">
						<div class="preventing-content pb-lg-5" data-cues="slideInUp">
							<h2>Preventing fractures. Preserving resources.</h2>
							<p class="text-color">Every minute, someone in the UK suffers a fragility fracture.1 With
								direct healthcare costs already >£5 billion each year, the burden on the NHS is set to
								increase markedly as the population ages.1,2</p>

							<p>For patients too, the consequences can be devastating. Hip and vertebral fractures tend
								to have the most worrying repercussions, but fractures at any site can impact on
								survival.3,4</p>

							<p>Since there is no clinical specialty dedicated solely to bone health, sharing essential
								knowledge and tools to support the provision of optimal care for patients assumes
								particular importance.</p>

							<p>That is where our Bone Health Hub fits in. As well as providing you with information on
								our four treatments spanning the osteoporosis management pathway, you will find clinical
								and patient guides, links to our webinar platform and our Bone Health Algorithm, a
								useful tool that aims to provide a framework to aid decision-making around treatments,
								developed in conjunction with the Royal Osteoporosis Society.</p>

							<p>Just scroll down to explore the hub.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Preventing Area ===-->

	<!--=== Start Factor Area ===-->
	<div class="factor-area bg-color-23185b ptb-100">
		<div class="container">
			<div class="factor-content" data-cues="slideInUp">
				<h3>While age is a significant risk factor for developing osteoporosis, poor bone health later in life
					is not inevitable.</h3>
				<p>Consequently, our portfolio of cost-effective bone health treatments spans the patient pathway from
					prevention and management of vitamin D deficiency through to treatment of osteoporosis and fracture
					prevention</p>
			</div>
		</div>
	</div>
	<!--=== End Factor Area ===-->

	<!--=== Start Prevention Area ===-->
	<div class="prevention-area pt-100 pb-70 text-center" id="prevention">
		<div class="container">
			<div class="prevention-title mb-5" data-cues="slideInUp">
				<h3> <img src="<?php echo img_dir (); ?>/shape-1.png" alt="shape-1"> Prevention, treatment and management across the
					osteoporosis patient pathway</h3>
			</div>

			<div class="row" data-cues="slideInUp">
				<div class="col-lg-3 col-sm-6">
					<div class="partner-logo mb-30">
						<img src="<?php echo img_dir (); ?>/partner-1.png" alt="partner-1">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="partner-logo mb-30">
						<img src="<?php echo img_dir (); ?>/partner-2.png" alt="partner-2">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="partner-logo mb-30">
						<img src="<?php echo img_dir (); ?>/partner-3.png" alt="partner-3">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="partner-logo mb-30">
						<img src="<?php echo img_dir (); ?>/partner-4.png" alt="partner-4">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Prevention Area ===-->

	<!--=== Start Features Area ===-->
	<div class="overflow-hidden">
		<div class="features-area bg-color-f5f5f5 position-relative">
			<div class="container">
				<div class="global-side-wrap-right">
					<div class="row">
						<div class="col-lg-5" data-cues="slideInLeft">
							<div class="single-features pt-150 mb-30">
								<div class="features-header">
									<h3>Fultium-D <sub>3</sub></h3>
									<span>Colecalciferol</span>
								</div>
								<div class="features-content">
									<p>The UK’s #1 prescribed licensed vitamin D brand, with a range of doses costing
										from as little as 6p per day5,6</p>
									<a href="#" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-1.png" alt="right-1">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-7" data-cues="slideInRight">
							<div class="features-img one">
								<img src="<?php echo img_dir (); ?>/img-2.png" alt="img-2">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Features Area ===-->

		<!--=== Start Features Area ===-->
		<div class="features-area bg-color-f5f5f5 position-relative z-1">
			<div class="container">
				<div class="global-side-wrap">
					<div class="row">
						<div class="col-lg-7" data-cues="slideInLeft">
							<div class="features-img-3">
								<img src="<?php echo img_dir (); ?>/img-3.png" alt="img-3">
							</div>
						</div>
						<div class="col-lg-5">
							<div class="single-features ms-auto me-0 mt-4" data-cues="slideInRight">
								<div class="features-header bg-ec691d">
									<h3>Accrete-D <sub>3</sub></h3>
									<span>Calcium/Colecalciferol</span>
								</div>
								<div class="features-content">
									<p>The UK’s #1 prescribed licensed vitamin D brand, with a range of doses costing
										from as little as 6p per day5,6</p>
									<a href="#" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-2.png" alt="right-1">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Features Area ===-->

		<div class="features-area bg-color-f5f5f5 position-relative z-2">
			<div class="container">
				<div class="global-side-wrap-right">
					<div class="row">
						<div class="col-lg-5" data-cues="slideInLeft">
							<div class="single-features pt-4">
								<div class="features-header bg-74378c">
									<div class="d-flex align-items-center">
										<img src="<?php echo img_dir (); ?>/shape-2.png" alt="shape-2">
										<div class="ms-2">
											<span>Buffered</span>
											<h3>Binosto</h3>
											<span>Alendronic acid70 mg</span>
										</div>
									</div>
								</div>
								<div class="features-content">
									<p>A buffered, soluble, effervescent alendronate tablet formulation, enhancing GI
										tolerability and persistence8,9</p>
									<a href="#" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-3.png" alt="right-3">
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-7" data-cues="slideInRight">
							<div class="features-img-4">
								<img src="<?php echo img_dir (); ?>/img-4.png" alt="img-4">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Features Area ===-->

		<!--=== Start Features Area ===-->
		<div class="features-area bg-color-f5f5f5 position-relative z-3">
			<div class="container">
				<div class="global-side-wrap">
					<div class="row">
						<div class="col-lg-7" data-cues="slideInLeft">
							<div class="features-img-5">
								<img src="<?php echo img_dir (); ?>/img-5.png" alt="img-5">
							</div>
						</div>
						<div class="col-lg-5" data-cues="slideInRight">
							<div class="single-features ms-auto me-0 mt-4 mb-30">
								<div class="features-header bg-757ea0">
									<h3>Movymia</h3>
									<span>Teriparatide</span>
								</div>
								<div class="features-content">
									<p>An affordable teriparatide biosimilar treatment, minimising waste with a
										reusable, multi-dose pen10,11</p>
									<a href="#" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-4.png" alt="right-4">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Features Area ===-->
	</div>

	<!--=== Start Webinar Platform Area ===-->
	<div class="webinar-platform-area overflow-hidden">
		<div class="container">
			<div class="global-side-wrap-right-2">
				<div class="row align-items-center">
					<div class="col-lg-6" data-cues="slideInLeft">
						<div class="webinar-platform-content">
							<h2>Webinar Platform </h2>
							<p>Access a curated series of educational sessions presented by experts in the field of bone
								health, supporting your ongoing professional learning and development.</p>
							<a href="#" class="main-btn">Click Here</a>
						</div>
					</div>
					<div class="col-lg-6" data-cues="slideInRight">
						<div class="webinar-platform-img">
							<img src="<?php echo img_dir (); ?>/img-6.png" alt="img-6">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Webinar Platform Area ===-->

	<!--=== Start Algorithm Area ===-->
	<div class="algorithm-area bg-color-f5f5f5 pt-100">
		<div class="container">
			<div class="global-side-wrap">
				<div class="row align-items-center">
					<div class="col-xxl-6" data-cues="slideInLeft">
						<div class="algorithm-img">
							<img src="<?php echo img_dir (); ?>/algorithm-img.png" alt="algorithm-img">
						</div>
					</div>
					<div class="col-xxl-6" data-cues="slideInRight">
						<div class="algorithm-content">
							<h2>Bone Health Algorithm</h2>
							<p>Created in collaboration with the Royal Osteoporosis Society, this valuable tool
								establishes a structured framework to facilitate treatment decision-making. Supporting
								consistency across populations, the algorithm asks a series of questions to guide
								clinicians through a potential diagnosis of vitamin D deficiency and/or osteoporosis
								followed by a suggested treatment pathway. The aim is to optimise patient outcomes by
								delivering the appropriate treatment at the appropriate time in line with national NICE,
								SIGN and NOGG guidelines.</p>
							<a href="#" class="main-btn">Click Here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Algorithm Area ===-->

	<!--=== Start Royal Area ===-->
	<div class="royal-area bg-color-0d5fb7 py-5">
		<div class="container">
			<div class="row align-items-center" data-cues="slideInUp">
				<div class="col-xl-2 col-sm-6">
					<img src="<?php echo img_dir (); ?>/logo-3.png" alt="logo-3">
				</div>
				<div class="col-xl-4 col-sm-6">
					<div class="royal-content">
						<p>We are proud to be a partner of the Royal Osteoporosis Society.</p>
					</div>
				</div>
				<div class="col-xl-4 col-sm-6">
					<div class="royal-content">
						<p>We are proud to be a partner of the Royal Osteoporosis Society.</p>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6 mt-3 mt-md-0">
					<a href="#" class="main-btn royal-bttn">Click Here</a>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Royal Area ===-->

	<!--=== Start References Area ===-->
	<div class="references-area ptb-100">
		<div class="container">
			<span class="d-block text-center references-title">References</span>
			<div class="references-wrapper">
				<div class="row" data-cues="slideInUp">
					<div class="col-lg-6">
						<div class="references-content">
							<ol class="references-list">
								<li>International Osteoporosis Foundation. Available at:
									www.osteoporosis.foundation/sites/</li>
								<li>Odén A et al. Osteoporos Int 2015; 26(9): 2243-8.</li>
								<li>Migliorini F et al. Medicina (Kaunas) 2021; 57(10): 1119.</li>
								<li>Brown JP et al. BMC Musculoskelet Disord 2021; 22(1): 105.</li>
								<li>Data on File, Thornton & Ross (most prescribed).</li>
								<li>Data on File. Thornton & Ross (annual cost).</li>
								<li>DM+D. Available at: services.nhsbsa.nhs.uk/dmd-browser Accessed: August 2023</li>
								<li>Minisola S et al. JBMR Plus 2021; 5(7): e10510.</li>
								<li>Giusti A et al. Aging Clin Exp Res 2021; 33(9): 2529-37.</li>
								<li>Movymia Summary of Product Characteristics, January 2021.</li>
								<li>DM+D. Available at: services.nhsbsa.nhs.uk/dmd-browser/amp/view/153616 and </li>
								<li>Calame W et al. Nutrients 2020; 12(6): 1868.</li>
								<li>Fultium-D3 800IU Capsules Summary of Product Characteristics, January 2018.</li>
							</ol>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="references-content">
							<ol class="references-list">
								<li>Fultium-D3 3200IU Capsules Summary of Product Characteristics, January 2018.</li>
								<li>Fultium-D3 20KIU Capsules Summary of Product Characteristics, January 2018.</li>
								<li>Fultium-D3 Drops Summary of Product Characteristics, August 2015.</li>
								<li>Wan M et al. Br J Clin Pharmacol 2021; 87(3): 1338-46.</li>
								<li>Martin LR et al. Ther Clin Risk Manag 2005 Sep;1(3):189-99.</li>
								<li>Accrete D3 Film-Coated Tablets Summary of Product Characteristics, December 2022.
								</li>
								<li>Accrete D3 One a Day 1000 mg / 880 IU Chewable Tablets Summary of Product</li>
								<li>Reid IR, Bolland MJ. Nutrients 2020; 12(4): 1011.</li>
								<li>Bastounis A et al. Osteoporos Int 2022; 33(6): 1223-33.</li>
								<li>Morley J et al. Osteoporos Int 2020; 31(3): 533-45.</li>
								<li>Fuggle N et al. Aging Clin Exp Res 2022; 34(11): 2625-34.</li>
								<li>Hodges LA et al. Int J Pharm 2012; 432(1-2): 57-62.</li>
								<li>Binosto 70 mg Effervescent Tablets Summary of Product Characteristics, June.</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End References Area ===-->

	<!--=== Start Information Area ===-->
	<div class="information-area">
		<div class="container">
			<div class="information-content text-center" data-cues="slideInUp">
				<span class="d-block title">Information</span>
				<p class="dis-one">For information on our products please visit EMC, https://www.medicines.org.uk/emc/
					and search the product for a Summary of Product Characteristics</p>
				<p class="dis-two">Adverse events should be reported. Reporting forms and information can be found at:
					www.mhra.gov.uk/yellowcard. Adverse events should also be reported to Thornton and Ross Limited by
					emailing thorntonross@medinformation.co.uk or by calling 01484 848164</p>
				<p class="dis-three">UK-MULT-130 | Date of Preparation August 2023</p>
			</div>
		</div>
	</div>
	<!--=== End Information Area ===-->

	<!--=== Start Footer Area ===-->
	<div class="footer-area bg-color-23185b pt-70 pb-70">
		<div class="container">
			<div class="row align-items-center" data-cues="slideInUp">
				<div class="col-lg-4 col-sm-6 col-md-4">
					<div class="single-footer">
						<ul class="ps-0 mb-0">
							<li>
								<a href="#">Fultium</a>
							</li>
							<li>
								<a href="#">Accrete</a>
							</li>
							<li>
								<a href="#">Binosto</a>
							</li>
							<li>
								<a href="#">Movymia</a>
							</li>
							<li>
								<a href="#">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-4">
					<div class="single-footer py-4">
						<a href="#" class="d-block text-md-center">
							<img src="<?php echo img_dir (); ?>/footer-logo.png" alt="footer-logo">
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-md-4">
					<div class="single-footer d-sm-flex justify-content-end">
						<ul class="ps-0 mb-0">
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">LinkedIn</a>
							</li>
							<li>
								<a href="#">Data Protection Notice</a>
							</li>
							<li>
								<a href="#">Terms and Conditions</a>
							</li>
							<li>
								<a href="#">Adverse Event Reporting</a>
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
			<p>Thornton & Ross is a member of the STADA Group <span class="ms-sm-5"> © Copyright Thornton & Ross
					2023</span></p>
		</div>
	</div>
	<!--=== End Copyright Area ===-->
</body>

</html>

<?php
get_footer();