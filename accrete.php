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
                        D3 brand offering a choice of swallowable and chewable tablets <sup>7</sup></h4>
                    <p>Non-adherence to osteoporosis therapy places a huge burden on healthcare systems; the cost/patient is 6x higher than with diabetes medication.18 Flavour, texture, and pill burden can impact on adherence.19</p>
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
                        <p>Respecting patient preference is an important way to support treatment persistence.20 <br> With Accrete-D3, patients at risk of calcium and vitamin D3 deficiency have a choice:</p>
                        <ul>
                            <li>Bi-daily, film-coated, swallowable tablets21</li>
                            <li>Once daily, orange-flavoured, chewable tablets22</li>
                            <li>For the 1 in 200 people in the UK on chronic glucocorticoid treatment22</li>
                            <li>For bisphosphonate-related hypocalcaemia in those with vitamin D deficiency23</li>
                            <li>For frail, elderly patients, particularly if institutionalised or housebound23</li>
                        </ul>
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
                    <p>Accrete is the least expensive calcium + vitamin D3 brand offering a choice of swallowable and chewable tablets.7</p>
                    <p>Please complete this form and a member of our team will contact you with specific cost-savings information for your locality.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary">Download</button>
</div>
<!--=== End Request Area ===-->

<!--=== Start Request Area ===-->
<div class="request-cost-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5" data-cues="slideInLeft">
                <div class="request-cost-content">
                    <h2>Patient Guide download</h2>
                    <p>Please register for an instant to download of the Accrete patient guide for more information on the importance of a calcium-vitamin D treatment and tips on how to improve bone health alongside the treatment.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary">Download</button>
</div>
<!--=== End Request Area ===-->

<div class="pt-100">
    <div class="container-fluid p-0">
        <img src="<?php echo img_dir (); ?>/shape-3.png" class="w-100" alt="shape-3">
    </div>
</div>

<?php
get_footer();
