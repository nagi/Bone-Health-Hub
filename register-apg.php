<?php
/**
 * Template Name: register
 * Description: Registration page.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php echo do_shortcode( '[contact-form-7 id="1734e87" title="Registration Accrete Patient Guide"]' ); ?>
        </div>
    </div>
</div>

<?php
get_footer();
