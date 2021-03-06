<?php
/**
* Header
*
* Header Images includes/header-hero-image-hooks.php
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans|Shrikhand" rel="stylesheet">

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

	<body <?php body_class( $classes ) ?>>

		<header id="header-height">

			<div id="navbar-sm">

				<?php include( 'includes/navbar-sm.php' ); ?>

			</div><!-- #navbar-sm -->

			<div class="container-fluid no pad">

				<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'main_background_image', 'option' ) ); ?>' )">

				<?php do_action( 'hero' ); ?>

			</div><!-- end container-fluid -->

			<div id="navbar-lg">

				<?php include( 'includes/navbar-lg.php' ); ?>

			</div><!-- #navbar-lg -->

		</header><!-- #header-height -->

<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'main_background_image', 'option' ) ); ?>' )">











