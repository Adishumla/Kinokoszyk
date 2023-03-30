<?php
/*
Template Name: Router
*/

if ( is_page( 'about' ) ) {
    get_template_part( 'about-template.php' );
	get_template_part('photos.php');
}  else {
    // Visa standard WordPress-sida
    get_header();
    get_footer();
}
