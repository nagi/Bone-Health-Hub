<?php
/**
 * Template Name: Home
 * Description: The template for displaying the home page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
global $bone_health_job_number;
$bone_health_job_number = "UK-MULT-130(1)";
?>

	<!--=== Start Banner Area ===-->
	<div class="hero-slider-wrap position-relative">
		<div class="hero-slider-area hero-slider owl-carousel-disabled owl-theme">
			<div class="hero-slider-item bg-home">
				<div class="container">
					<div class="banner-content">
						<h2>STADA Bone Health Hub</h2>
						<p>Preventing Fractures. <br> Preserving Resources.</p>
						<p class="blurb">The STADA Bone Health Hub contains information and bone health resources that aim to 
							support Healthcare Professionals in preventing fractures and preserving NHS resources.</p>
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

		<?php get_template_part('/partials/stay-in-touch-tab'); ?>
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
					<div class="col-xxl-6 pt-5">
						<div class="preventing-content pt-5 pb-lg-5" data-cues="slideInUp">
							<h2>Preventing fractures. <br>
							Preserving resources.</h2>
							<p class="tiny">The STADA Bone Health Hub contains information and bone health resources that aim to support
								Healthcare Professionals in preventing fractures and preserving NHS resources.</p>
							
							<p class="semibold">Every minute, someone in the UK suffers a fragility fracture.<sup>1</sup>
							    <br><br>
								With osteoporotic fracture costs already £4.7 billion each year, the burden on the NHS is set to
								increase markedly as the population ages.<sup>1,2</sup></p>
							

							
							<p class="regular">For patients too, the consequences can be devastating. Hip and vertebral fractures tend
								to have the most worrying repercussions, but fractures at any site can impact on
								survival.<sup>3,4</sup></p>

							<p class="regular">Since there is no clinical specialty dedicated solely to bone health, sharing essential
								knowledge and tools to support the provision of optimal care for patients assumes
								particular importance.</p>

							<p class="regular">
								That’s where our STADA Bone Health Hub fits in. As well as providing you with information on our four treatments 
								spanning the bone health patient pathway, you will find clinical and patient guides, access to HCP educational 
								webinars and our Bone Health Algorithm, a useful tool that aims to provide a framework to aid decision-making
								around treatments, developed in conjunction with the Royal Osteoporosis Society.
							</p>

						</div>
						<p class="semibold">Just scroll down to explore the hub.</p>
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
				<h3>Our portfolio offers Prevention, Treatment and Management across the bone health patient pathway</h3>
			</div>

			<div class="row" data-cues="slideInUp">
				<div id="elips" class="col-lg-12" style="display: none;">
					<img src="<?php echo svg_dir (); ?>/elips.svg" alt="">
				</div>
			</div>

			<div class="row" data-cues="slideInUp">
				<div class="col-lg-3 col-sm-6">
					<p class="purpose">
						Prevent & treat vitamin D deficiency<sup>5</sup>
					</p>
					<a href="#fulti">
						<div class="partner-logo mb-30">
							<img src="<?php echo img_dir (); ?>/partner-1.png" alt="partner-1">
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<p class="purpose">
						Prevent & treat vitamin D and calcium deficiency<sup>6</sup>
					</p>
					<a href="#accre">
						<div class="partner-logo mb-30">
							<img src="<?php echo img_dir (); ?>/partner-2.png" alt="partner-2">
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<p class="purpose">
						Treat osteoporosis in women after menopause<sup>7</sup>
					</p>
					<a href="#binos">
						<div class="partner-logo mb-30">
							<img src="<?php echo img_dir (); ?>/partner-3.png" alt="partner-3">
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<p class="purpose">
						Treatment of osteoporosis in post-menopausal women and in men at increased risk of fracture<sup>8</sup>
					</p>
					<a href="#movym">
						<div class="partner-logo mb-30">
							<img src="<?php echo img_dir (); ?>/partner-4.png" alt="partner-4">
						</div>
					</a>
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
						<div id="fulti" class="col-lg-5" data-cues="slideInLeft">
							<div class="single-features pt-110 mb-30">
								<div class="features-header">
									<h3>Fultium-D <sub>3</sub></h3>
									<span>Colecalciferol</span>
								</div>
								<div class="features-content">
									<p>The UK’s #1 prescribed licensed vitamin D brand, with a simple 360 day 
										loading and maintenance regimen for only £66.51<sup>9,10</sup></p>
									<a href="/fultium" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-1.png" alt="right-1">
									</a>
									<br>
									<a class="pi semibold" href="<?php echo docs_dir() ?>Fultium-D3-prescribing-information.pdf" target="_blank">Fultium Prescribing Information</a>
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
						<div id="accre" class="col-lg-7" data-cues="slideInLeft">
							<div class="features-img-3">
								<img src="<?php echo img_dir (); ?>/img-3.png" alt="img-3">
							</div>
						</div>
						<div class="col-lg-5">
							<div class="single-features ms-auto mt-4" data-cues="slideInRight">
								<div class="features-header bg-ec691d">
									<h3>Accrete-D <sub>3</sub></h3>
									<span>Calcium/Colecalciferol</span>
								</div>
								<div class="features-content">
									<p>
										The least expensive calcium + vitamin D3 brand offering
										a choice of swallowable and chewable tablets<sup>11</sup>
									</p>
									<br>
									<a href="/accrete" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-2.png" alt="right-1">
									</a>
									<br>
									<a class="pi semibold" href="<?php echo docs_dir() ?>Accrete–prescribing-information.pdf" target="_blank">Accrete Prescribing Information</a>
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
						<div id="binos" class="col-lg-5" data-cues="slideInLeft">
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
									<p>A buffered, soluble, effervescent alendronate tablet formulation, 
										enhancing GI tolerability and persistence<sup>12,13</sup></p>
									<a href="/binosto" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-3.png" alt="right-3">
									</a>
									<br>
									<a class="pi semibold" href="<?php echo docs_dir() ?>Binosto-prescribing-information.pdf" target="_blank">Binosto Prescribing Information</a>
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
						<div id="movym" class="col-lg-7" data-cues="slideInLeft">
							<div class="features-img-5">
								<img src="<?php echo img_dir (); ?>/img-5.png" alt="img-5">
							</div>						
						</div>
						<div class="col-lg-5" data-cues="slideInRight">
							<div class="single-features ms-auto mt-4 mb-30">
								<div class="features-header bg-757ea0">
									<h3>Movymia<span class="movy-tri">▼</span></h3>
									<span>Teriparatide</span>
								</div>
								<div class="features-content">
									<p>An affordable teriparatide biosimilar treatment,
										minimising waste with a reusable, multi-dose pen<sup>8,14</sup></p>
									<a href="https://www.stadaspecialtybiosimilars.co.uk/movymia.html" target="_blank" class="main-btn">
										More information
										<img src="<?php echo img_dir (); ?>/right-4.png" alt="right-4">
									</a>
									<br>
									<a id="movy-pi" class="pi semibold" href="<?php echo docs_dir() ?>Movymia-prescribing-information.pdf" target="_blank">Movymia<span class="movy-tri">▼</span> Prescribing Information</a>
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
							<h2>HCP Webinar Portal</h2>
							<p>Access a curated series of educational sessions presented by experts in the field of bone
								health, supporting your ongoing professional learning and development.</p>
							<a href="https://www.stadahcp.co.uk/webinars?topic=Bone%20Health" target="_blank" class="main-btn">More Information</a>
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
							<p>Created in collaboration with the Royal Osteoporosis Society, this valuable tool establishes a structured framework 
								to facilitate treatment decision-making. Supporting consistency across populations, the algorithm asks a series of 
								questions to guide clinicians through a potential diagnosis of vitamin D deficiency and/or osteoporosis followed by 
								a suggested treatment pathway. The aim is to optimise patient outcomes by delivering the appropriate treatment at the 
								appropriate time in line with national NICE, SIGN and NOGG guidelines.</p>
							<a href="https://bonehealth.rxdetail.io/"  target="_blank" class="main-btn">Click Here</a>
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
					<a href="https://theros.org.uk/" target="_blank">
						<img src="<?php echo img_dir (); ?>/logo-3.png" alt="r.o.s logo">
					</a>
				</div>
				<div class="col-xl-4 col-sm-6">
					<div class="royal-content">
						<p>We are proud to be a partner of the Royal Osteoporosis Society.</p>
					</div>
				</div>
				<div class="col-xl-4 col-sm-6">
					<div class="royal-content">
						<p class="more">For more information on the ROS’s mission, research academy, patient support 
							and other initiatives, please click the link</p>
					</div>
				</div>
				<div class="col-xl-2 col-sm-6 mt-3 mt-md-0">
					<a href="https://theros.org.uk/"  target="_blank" class="main-btn royal-bttn">Click Here</a>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Royal Area ===-->

	<!--=== Start References Area ===-->
	<div class="references-area pt-5">
		<div class="container">
			<span class="d-block text-center references-title">References</span>
			<div class="references-wrapper">
				<div class="row" data-cues="slideInUp">
					<div class="col-lg-6">
						<div class="references-content">
							<ol class="references-list">
								<li>
								International Osteoporosis Foundation. Available at: www.osteoporosis.foundation/sites/iofbonehealth/files/scope-2021/UK%20report.pdf Accessed on: 17.08.23.
								</li>
								<li>Odén A <i>et al</i>. Osteoporos Int 2015; 26(9): 2243-8.</li>
								<li>Migliorini F <i>et al</i>. Medicina (Kaunas) 2021; 57(10): 1119.</li>
								<li>Brown JP <i>et al</i>. BMC Musculoskelet Disord 2021; 22(1): 105.</li>
								<li> 
									Fultium-D3 800IU Capsules Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/2813/smpc. Accessed: September 2023.
								</li>
								<li>
									Accrete D3 Film-Coated Tablets Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/2766. Accessed: September 2023.
								</li>
								<li>
									Binosto 70 mg Effervescent Tablets Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/7113. Accessed: September 2023.
								</li>
							</ol>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="references-content">
							<ol class="references-list" start="8">
								<li>Movymia Summary of Product Characteristics, January 2021: https://www.medicines.org.uk/emc/product/10780. Accesses September 2023.</li>
								<li>IQVIA. RXA Sales Dashboard – September 2023. Data on File, STADA UK, Thornton & Ross.</li>
								<li>360 days’ treatment & maintenance on Fultium-D3: 90x3200IU (£39.96) + 3x90x800IU (3x£8.85) = £39.96 + £26.55 = £66.51.
									Source NHS DM+D, Accessed: September 2023. </li>
								<li>DM+D. Available at: services.nhsbsa.nhs.uk/dmd-browser Accessed: September 2023.</li>
								<li>Minisola S <i>et al</i>. JBMR Plus 2021; 5(7): e10510.</li>
								<li>Giusti A <i>et al</i>. Aging Clin Exp Res 2021; 33(9): 2529-37.</li>
								<li>DM+D. Available at: services.nhsbsa.nhs.uk/dmd-browser/amp/view/153616 and services.nhsbsa.nhs.uk/dmd-browser/amp/view/153615 Accessed: September 2023</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End References Area ===-->
<?php
get_footer();
