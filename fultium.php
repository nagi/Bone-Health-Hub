<?php
/**
 * Template Name: Fultium
 * Description: Fultium product page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<!--=== Start Page Banner Area ===-->
<div class="page-banner-area position-relative">
	<div class="container-fluid p-0">
		<img src="<?php echo img_dir (); ?>/banner-bg-2.png" class="w-100" alt="banner-bg-2">
		<div class="stay-in-touch-wrap">
			<a href="#" class="stay-in-touch">Stay in touch!</a>
		</div>
	</div>
</div>
<!--=== End Page Banner Area ===-->

<!--=== Start Webinar Platform Area ===-->
<div class="webinar-platform-area overflow-hidden top-shape">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xxl-6" data-cues="slideInLeft">
				<div class="webinar-platform-content style-two">
					<h2>Fultium-D3<sub>3</sub></h2>
					<h4>The UK’s #1 prescribed licensed <br> vitamin D brand5</h4>
					<p>Vitamin D is pivotal in the well-being of every individual.12 During the winter, 30–40% of the UK population have vitamin D levels that fall below those recommended, and 2-13% in the summer.12</p>
				</div>
			</div>
			<div class="col-xxl-6" data-cues="slideInRight">
				<div class="webinar-platform-img">
					<img src="<?php echo img_dir (); ?>/img-7.png" alt="img-7">
				</div>
			</div>
		</div>
	</div>
</div>
<!--=== End Webinar Platform Area ===-->

<!--=== Start Webinar Platform Area ===-->
<div class="webinar-platform-area overflow-hidden">
	<div class="container">
		<div class="global-side-wrap">
			<div class="row align-items-center">
				<div class="col-xxl-6" data-cues="slideInLeft">
					<div class="webinar-platform-img">
						<img src="<?php echo img_dir (); ?>/img-8.png" alt="img-8">
					</div>
				</div>
				<div class="col-xxl-6" data-cues="slideInRight">
					<div class="webinar-platform-content style-three">
						<p>Prescribe Fultium-D3 by name for a simple approach to prevention and treatment of vitamin D deficiency:13-16</p>
						<ul>
							<li>Range of loading and maintenance doses to support all patients13-16</li>
							<li>Daily drops (3 drops=200IU), suitable for vegetarians, from birth onwards16</li>
							<li>Daily, weekly or monthly colour-coded capsules, halal and kosher certified, from 12 years13-15</li>
							<li>Doses up to 3200IU approved for pregnant and lactating women13-16</li>
							<li>A licensed product, ensuring acceptable standards of efficacy, safety, and quality13-17</li>
							<li>From as little as 6p per day6</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--=== End Webinar Platform Area ===-->

<div class="pt-100">
	<div class="container-fluid p-0">
		<img src="<?php echo img_dir (); ?>/shape-3.png" class="w-100" alt="shape-3">
	</div>
</div>

<hr>

<?php
get_footer();