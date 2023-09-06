<?php
/**
 * Template Name: Downloads
 * Description: Links to downloadable PDFs.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div class="all_downloads container my-5 p-3">
    <div class="row text-center">
        <h1>Downloads</h1>
    </div>
    <div class="downloads row d-flex justify-content-center text-center">
        <div class="download col-md-4 my-5">
            <a href="<?php echo docs_dir (); ?>Binosto-Patient-Download-Guide.pdf">
                <img src="<?php echo img_dir (); ?>b-p_thumb.jpg" alt="">
            </a>
            <h3>Binosto Patient Guide</h3>
        </div>
        <div class="download col-md-4 my-5">
            <a href="<?php echo docs_dir (); ?>Accrete-Patient-Download-Guide.pdf">
                <img src="<?php echo img_dir (); ?>a-p_thumb.jpg" alt="">
            </a>
            <h3>Accrete Patient Guide</h3>
        </div>
        <div class="download col-md-4 my-5">
            <a href="<?php echo docs_dir (); ?>Binosto-HCP-Download-Guide.pdf">
                <img src="<?php echo img_dir (); ?>b-hcp_thumb.jpg" alt="">
            </a>
            <h3>Binosto HCP Guide</h3>
        </div>
    </div>
</div>

<?php
get_footer();
