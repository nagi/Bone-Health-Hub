<?php
/**
 * Template Name: Stay in touch
 * Description: Form to register for marketing emails.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<?php echo do_shortcode( '[contact-form-7 id="9d28b8d" title="Stay In Touch"]' ); ?>

<?php
get_footer();
