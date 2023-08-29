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
			<a href="#" class="stay-in-touch" data-bs-toggle="modal" data-bs-target="#crmModal">Stay in touch!</a>
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
			<div class="xcontainer">
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
			<div class="xcontainer">
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
			<div class="xcontainer">
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
			<div class="xcontainer">
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

<?php
get_footer();