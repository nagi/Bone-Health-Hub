<?php
/**
 * Template Name: register-bhg
 * Description: Registration page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php echo do_shortcode( '[contact-form-7 id="4ed53e3" title="Registration Binosto HCP Guide"]' ); ?>
        </div>
    </div>
</div>

<?php
get_footer();
