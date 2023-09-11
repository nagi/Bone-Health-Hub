<?php
/**
 * Template Name: Accrete
 * Description: Accrete product page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
$bone_health_job_number = "UK-MULT-130a(1)";
?>

<!--=== Start Page Banner Area ===-->
<div class="hero-slider-wrap position-relative">
	<div class="hero-slider-area hero-slider owl-carousel-disabled owl-theme">
		<div class="hero-slider-item bg-accrete">
			<div class="container">
				<div class="banner-seo">
					<h1>Accrete D3</h1>
					<h3>Calcium / Colecalciferol</h3>
				</div>
				<div class="banner-logo d-flex flex-row-reverse accrete">
					<img src="<?php echo svg_dir (); ?>accrete-logo.svg" alt="accrete">
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('/partials/stay-in-touch-tab'); ?>
</div>
<!--=== End Page Banner Area ===-->

<!--=== Start Webinar Platform Area ===-->
<div class="webinar-platform-area overflow-hidden top-shape">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 pt-xl-5" data-cues="slideInLeft">
                <div class="webinar-platform-content style-two">
                    <h2 class="c-black pt-5">Accrete-D<sub>3</sub></h2>
                    <h4>The least expensive calcium + vitamin 
                        D<sub>3</sub> brand offering a choice of swallowable and chewable tablets <sup>1,2</sup></h4>
                    <p>Non-adherence to osteoporosis therapy places a huge burden on healthcare systems; 
                        the cost/patient is 6x higher than with diabetes medication.<sup>3</sup> Flavour, texture, 
                        and pill burden can impact on adherence.<sup>4</sup>
                    </p>
                    <p>
                        Accrete is Indicated for the Prevention and treatment of vitamin D and calcium deficiency in 
                        the elderly. Adjunct to specific osteoporosis treatment of patients at risk of vitamin D and 
                        calcium deficiency.
                    </p>
                    <a href="<?php echo docs_dir() ?>Accrete–prescribing-information.pdf" target="_blank">Accrete Prescribing Information</a>
                </div>
            </div>
            <div class="col-xxl-6" data-cues="slideInRight">
                <div class="webinar-platform-img">
                    <img src="<?php echo img_dir (); ?>/img-9.png" alt="img-9">
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
                        <img src="<?php echo img_dir (); ?>/img-10.png" alt="img-10">
                    </div>
                </div>
                <div class="col-xxl-6" data-cues="slideInRight">
                    <div class="webinar-platform-content style-three">
                        <p class="semibold pb-1 mb-0">Respecting patient preference is an important way to support treatment persistence.<sup>5</sup></p>
                        <p class="semibold"> With Accrete-D<sub>3</sub>, patients at risk of calcium and vitamin D<sub>3</sub> deficiency have a choice:</p>
                        <ul>
                            <li>Twice-daily, film-coated, swallowable tablets<sup>6</sup></li>
                            <li>Once daily, orange-flavoured, chewable tablets<sup>7</sup></li>
                            <li>The cost of 30 days treatment is just £2.95 (approximately £35.40 a year)</li>
                            <li>Provides savings of up to 24% compared with the market leading brand<sup>2,6-9</sup></li>
                        </ul>
                        <p class="smallprint">
                            During pregnancy, daily dose should not exceed 1500 mg calcium and 600 IU vitamin D. See SMPC for more information.
                        </p>
                        <p class="smallprint">
                            Savings of up to 24% with Accrete-D3 One a Day (1000mg/880IU) chewable tablets at £2.95 for 30 tablets vs Adcal-D3 (600mg/400IU)
                            twice daily chewable tablets at £3.91, this is an equivalent cost for 30 days treatment. Adcal-D3 (600mg/400IU) twice daily chewable 
                            tablets are listed at £3.65 for 56 tablets
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Webinar Platform Area ===-->

<!--=== Start Request Area ===-->
<div id="cost_report" class="request-cost-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-5" data-cues="slideInLeft">
                <div class="request-cost-content">
                    <h2>Request Cost <br> Savings Report</h2>
                    <p>Accrete is the least expensive calcium + vitamin D<sub>3</sub> brand offering a choice of swallowable and chewable tablets.<sup>1</sup></p>
                    <p class="semibold">Please complete this form and a member of our team will contact you with specific cost-savings information for your locality.</p>
                </div>
            </div>
            <div class="col-xxl-5" data-cues="slideInLeft">
                <?php 
                    echo '<a href="/cost-savings" class="btn btn-primary rounded-5">Register for Cost Savings</a>';
                ?>
            </div>
        </div>
    </div>
</div>
<!--=== End Request Area ===-->

<!--=== Start Request Area ===-->
<div id="apg" class="request-cost-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-5" data-cues="slideInLeft">
                <div class="request-cost-content">
                    <h2>Patient Guide download</h2>
                    <p>Please register for an instant to download of the Accrete patient guide for more 
                        information on the importance of a calcium-vitamin D treatment and tips on how to 
                        improve bone health alongside the treatment.</p>
                </div>
            </div>
            <div class="col-xxl-5" data-cues="slideInLeft">
            <?php if(isRegistered()) {
                    echo '<a class="btn btn-primary rounded-5" href="' . docs_dir () . 'Accrete-Patient-Download-Guide.pdf' . '" target="_blank">Download</a>';
                } else {
                    echo '<a href="/register-apg?want=apg" class="btn btn-primary rounded-5">Register to download</a>';
                }
            ?>
            </div>
        </div>
    </div>
</div>
<!--=== End Request Area ===-->

<div class="pt-100">
    <div class="container-fluid p-0">
        <img src="<?php echo img_dir (); ?>/shape-3.png" class="w-100" alt="shape-3">
    </div>
</div>

<!--=== Start References Area ===-->
<div class="references-area pt-5">
	<div class="container">
		<span class="d-block text-center references-title">References</span>
		<div class="references-wrapper">
			<div class="row" data-cues="slideInUp">
				<div class="col-lg-6">
					<div class="references-content">
						<ol class="references-list">
                            <li>DM+D. Available at: services.nhsbsa.nhs.uk/dmd-browser Accessed: September 2023.</li>
                            <li>NHS List Price, Drug Tariff February 2023</li>
                            <li>Cutler RL <i>et al</i>. BMJ Open 2018; 8(1): e016982.</li>
							<li>Shariff Z <i>et al</i>. Pharmaceutics 2020; 12(10): 905.</li>
							<li>Martin LR <i>et al</i>. Ther Clin Risk Manag 2005 Sep;1(3):189-99.</li>
							<li>Accrete D3 Film-Coated Tablets Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/2766. Accessed: September 2023.</li>
						</ol>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="references-content">
						<ol class="references-list" start="7">
                            <li>Accrete D3 One a Day 1000 mg / 880 IU Chewable Tablets Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/8506. Accessed: September 2023.</li>
                            <li>HSCIC IQVIA RXA Unit Sales ending December 2022.</li>
                            <li>Adcal-D3® Chewable Tablets. Summary of Product Characteristics: https://www.medicines.org.uk/emc/product/1356/smpc. Accessed: September 2023.</li>

                            <li class="plain">
                                Adcal-D3® is a registered trademark of Kyowa Kirin Services Ltd.
                            </li>
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
