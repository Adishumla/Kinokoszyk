<?php
/*
Template Name: Router
*/

if ( is_page( 'about' ) ) {
    get_template_part( 'about-template.php' );
}  else {
    // Visa standard WordPress-sida
    get_header();
    get_footer();
}
