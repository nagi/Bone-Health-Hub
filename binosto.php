<?php
/**
 * Template Name: Binosto
 * Description: Binosto product page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
$bone_health_job_number = "UK-MULT-130c(3)";
?>

<!--=== Start Page Banner Area ===-->
<div class="hero-slider-wrap position-relative">
	<div class="hero-slider-area hero-slider owl-carousel-disabled owl-theme">
		<div class="hero-slider-item bg-binosto">
			<div class="container">
				<div class="banner-seo">
					<h1>Binosto</h1>
					<h3>Alendroni Acid</h3>
				</div>
				<div class="banner-logo d-flex x-flex-row-reverse binosto">
					<img src="<?php echo img_dir (); ?>binosto-logo.png" alt="binosto">
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
            <div class="col-xxl-6" data-cues="slideInLeft">
                <div class="webinar-platform-img">
                    <img src="<?php echo img_dir (); ?>img-13.png" alt="img-9">
                </div>
            </div>
            <div class="col-xxl-6 pt-xxl-5" data-cues="slideInLeft">
                <div class="webinar-platform-content style-two mw-100">
                    <h2 class="c-black pt-xl-5">Binosto</h2>
                    <h4>Binosto is a buffered, soluble, effervescent alendronate tablet formulation that addresses 
                        the challenges of gastrointestinal (GI) tolerability and patient adherence to bisphosphonates<sup>1,2</sup></h4>
                    <p>
                        While oral bisphosphonates have broad-spectrum efficacy to reduce fragility fractures, persistence is
                         crucial.<sup>2,3</sup> 2 in 3 postmenopausal women in the UK discontinue oral bisphosphonate therapy within a year.<sup>4</sup>
                    </p>
                    <p>
                        Binosto is indicated for the treatment of postmenopausal osteoporosis. It reduces the risk of vertebral and hip fractures.<sup>5</sup>
                    </p>
                    <p>
                        Additionally, Binosto benefited from a 36% list price reduction to support the NHS<sup>1,2*</sup>
                    </p>
                    <a href="<?php echo docs_dir() ?>Binosto-prescribing-information.pdf" target="_blank">Binosto Prescribing Information</a>
                    <p class="sale pt-3">* Price reduction live from July 2021. Available at: amims.co.uk/drugs/endocrine/<br>
                        osteoporosis-other-bone-disorders/binosto Accessed November 2023.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Webinar Platform Area ===-->

<!--=== Start Webinar Platform Area ===-->
<div class="webinar-platform-area overflow-hidden">
    <div class="container">
        <div class="global-side-wrap-right">
            <div class="row align-items-center">
                <div class="col-xxl-6" data-cues="slideInLeft">
                    <div class="webinar-platform-content style-three ms-0">
                        <div class="title">
                            <p class="semibold">Fully soluble, buffered, Binosto enhances upper GI tolerability, supporting persistence.<sup>1,2</sup></p>
                        </div>
                        <div class="icon-list align-items-center">
                            <div class="icon">
                                <img src="<?php echo img_dir (); ?>c-thumb-10.png" alt="thumb">
                            </div>
                            <div class="text">
                                <p>
                                    Avoids solid bisphosphonate irritating the oesophageal mucosa<sup>6,7</sup>
                                </p>
                                <p>
                                    Gastric pH levels are rapidly buffered to >3, lessening the risk of damage if reflux occurs<sup>6,7</sup>
                                </p>
                            </div>
                        </div>
                        <div class="icon-list align-items-center">
                            <div class="icon">
                                <img src="<?php echo img_dir (); ?>c-thumb-11.png" alt="thumb">
                            </div>
                            <div class="text">
                                <p>
                                    Fewer patients discontinued treatment due to GI adverse events with Binosto than with conventional alendronate tablets<sup>2</sup>
                                </p>
                            </div>
                        </div>
                        <div class="icon-list align-items-center">
                            <div class="icon">
                                <img src="<?php echo img_dir (); ?>c-thumb-12.png" alt="thumb">
                            </div>
                            <div class="text">
                                <p>
                                    Significantly increased persistence vs conventional alendronate tablets<sup>2</sup>
                                </p>
                            </div>
                        </div>
                        <div class="icon-list align-items-center">
                            <div class="icon">
                                <img src="<?php echo img_dir (); ?>c-thumb-13.png" alt="thumb">
                            </div>
                            <div class="text">
                                <p>
                                    Persistence rate of 81% reported in real-world patients at 1 year<sup>2</sup>
                                </p>
                            </div>
                        </div>
                        <div class="icon-list align-items-center">
                            <div class="icon">
                                <img src="<?php echo img_dir (); ?>c-thumb-14.png" alt="thumb">
                            </div>
                            <div class="text">
                                <p>
                                    Dissolves in just half a glass of plain water (120 ml)<sup>5</sup>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6" data-cues="slideInRight">
                    <div class="webinar-platform-img">
                        <img src="<?php echo img_dir (); ?>img-12.png" alt="img-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Webinar Platform Area ===-->

<!--=== Start Request Area ===-->
<div id="bpg" class="request-cost-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-8" data-cues="slideInLeft">
                <div class="request-cost-content">
                    <h2>Patient Guide download</h2>
                    <p>
                        Please register for an instant download of the Binosto Patient Guide. The guide will provide more 
                        information for patients on Binosto, how to take it, osteoporosis and tips on how to manage their 
                        condition.
                    </p>
                </div>
            </div>
            <div class="col-xxl-4" data-cues="slideInRight">
            <?php if(isRegistered()) {
                    echo '<a class="btn btn-primary rounded-5" href="' . docs_dir () . 'Binosto-Patient-Download-Guide.pdf' . '" target="_blank">Download</a>';
                } else {
                    echo '<a href="/register-bpg?want=bpg" class="btn btn-primary rounded-5">Register to download</a>';
                }
            ?>
            </div>
        </div>
    </div>
</div>
<!--=== End Request Area ===-->

<!--=== Start Request Area ===-->
<div id="bhg" class="request-cost-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-8" data-cues="slideInRight">
                <div class="request-cost-content">
                    <h2>HCP Information Guide download</h2>
                    <p>Please register for an instant download of our Binosto HCP Information Guide. The guide offers
                     information on key benefits, support and background for buffered, soluble, effervescent alendronate
                      tablet formulation.<sup>1,2</sup></p>
                </div>
            </div>
            <div class="col-xxl-4" data-cues="slideInLeft">
            <?php if(isRegistered()) {
                    echo '<a class="btn btn-primary rounded-5" href="' . docs_dir () . 'Binosto-HCP-Download-Guide.pdf' . '" target="_blank">Download</a>';
                } else {
                    echo '<a href="/register-bhg?want=bhg" class="btn btn-primary rounded-5">Register to download</a>';
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
				<div class="col-lg-2">
					<div class="references-content">
						<ol class="references-list">
						</ol>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="references-content">
						<ol class="references-list" start="1">
                            <li>Minisola S <i>et al</i>. JBMR Plus 2021; 5(7): e10510.</li>
                            <li>Giusti A <i>et al</i>. Aging Clin Exp Res 2021; 33(9): 2529-37.</li>
                            <li>Bastounis A <i>et al</i>. Osteoporos Int 2022; 33(6): 1223-33.</li>
                            <li>Morley J <i>et al</i>. Osteoporos Int 2020; 31(3): 533-45.</li>
                            <li>Binosto 70 mg Effervescent Tablets Summary of Product Characteristics:
                                https://www.medicines.org.uk/emc/product/7113. Accessed: November 2023.</li>
                            <li>Fuggle N <i>et al</i>. Aging Clin Exp Res 2022; 34(11): 2625-34.</li>
                            <li>Hodges LA <i>et al</i>. Int J Pharm 2012; 432(1-2): 57-62.</li>
						</ol>
					</div>
				</div>
                <div class="col-lg-2">
					<div class="references-content">
						<ol class="references-list">
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
