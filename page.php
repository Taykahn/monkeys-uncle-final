<?php 
/**
 * Page
 */

get_header();

if ( is_page( 'about' ) ) {

	get_template_part( 'partials/about' );

} else {

	get_template_part( 'partials/generic-page' );

}

get_footer();