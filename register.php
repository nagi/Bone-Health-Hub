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
            <?php get_template_part('partials/registration-form'); ?>
        </div>
    </div>
</div>

<?php
get_footer();
