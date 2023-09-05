<?php
/**
 * Template Name: Accrete
 * Description: Accrete product page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<!--=== Start Page Banner Area ===-->
<div class="page-banner-area position-relative">
    <div class="container-fluid p-0">
        <img src="<?php echo img_dir (); ?>/banner-bg-3.png" class="w-100" alt="banner-bg-3">
        <?php get_template_part('/partials/stay-in-touch-tab'); ?>
    </div>
</div>
<!--=== End Page Banner Area ===-->

<!--=== Start Webinar Platform Area ===-->
<div class="webinar-platform-area overflow-hidden top-shape">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6" data-cues="slideInLeft">
                <div class="webinar-platform-content style-two">
                    <h2>Accrete-D<sub>3</sub></h2>
                    <h4>The least expensive calcium + vitamin 
                        D<sub>3</sub> brand offering a choice of swallowable and chewable tablets <sup>1,2</sup></h4>
                    <p>Non-adherence to osteoporosis therapy places a huge burden on healthcare systems; 
                        the cost/patient is 6x higher than with diabetes medication.3 Flavour, texture, 
                        and pill burden can impact on adherence.<sup>4</sup></p>
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
                        <p>Respecting patient preference is an important way to support treatment persistence.<sup>5</sup><br><br>
                         With Accrete-D<sub>3</sub>, patients at risk of calcium and vitamin D<sub>3</sub> deficiency have a choice:</p>
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
<div class="request-cost-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-5" data-cues="slideInLeft">
                <div class="request-cost-content">
                    <h2>Request Cost <br> Savings Report</h2>
                    <p>Accrete is the least expensive calcium + vitamin D<sub>3</sub> brand offering a choice of swallowable and chewable tablets.<sup>1</sup></p>
                    <p>Please complete this form and a member of our team will contact you with specific cost-savings information for your locality.</p>
                </div>
            </div>
            <div class="col-xxl-5" data-cues="slideInLeft">
                <?php if(isRegistered()) {
                    echo '<a href="/downloads" class="btn btn-primary rounded-5">Go to downloads</a>';
                } else {
                    echo '<a href="/register" class="btn btn-primary rounded-5">Register to download</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--=== End Request Area ===-->

<!--=== Start Request Area ===-->
<div class="request-cost-area pt-100">
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
                    echo '<a href="/downloads" class="btn btn-primary rounded-5">Go to downloads</a>';
                } else {
                    echo '<a href="/register" class="btn btn-primary rounded-5">Register to download</a>';
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

<?php
get_footer();
