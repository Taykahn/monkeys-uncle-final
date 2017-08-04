<?php
/**
 * Header Hero Image Hook
 */

/**
 * Header Image
 *
 * @add_action Header Image
 *
 * @return void
 */

function hero_image_section() {

?>

<?php if ( is_page ( 'diy-monkey' ) | is_singular ( array ( 'chassis', 'diy' ) ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_diy_image', 570 ) ); ?>' )">

<?php } elseif ( is_page ( 'on-the-lift' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_lift_image', 570 ) ); ?>' )">

<?php } elseif ( is_post_type_archive ( 'the_shop' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_shop_image', 570 ) ); ?>' )">

<?php } elseif ( is_post_type_archive ( 'track_blog' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_track_image', 570 ) ); ?>' )">

<?php } else { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_home_image', 570 ) ); ?>' )">

<?php }

}

add_action( 'hero', 'hero_image_section' );
