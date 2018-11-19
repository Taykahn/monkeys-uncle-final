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

<?php if ( is_page ( 'diy-monkey' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_diy-monkey_img', 'option' ) ); ?>' )">

<?php } elseif ( is_singular ( 'chassis' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_chassis_img', 'option' ) ); ?>' )">

<?php } elseif ( is_singular ( 'diy' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_diy_img', 'option' ) ); ?>' )">

<?php } elseif ( is_post_type_archive ( 'the_lift' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_lift_img', 'option' ) ); ?>' )">

<?php } elseif ( is_post_type_archive ( 'the_shop' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_shop_img', 'option' ) ); ?>' )">

<?php } elseif ( is_post_type_archive ( 'track_blog' ) ) { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_track_img', 'option' ) ); ?>' )">

<?php } else { ?>

	<div class="header-parallax bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header_home_img', 'option' ) ); ?>' )">

<?php }

}

add_action( 'hero', 'hero_image_section' );
