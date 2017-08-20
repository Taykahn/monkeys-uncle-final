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

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'main_background_image', 'option' ) ); ?>' )">

	<body <?php body_class( $classes ) ?>>

		<header>

			<div class="container-fluid no pad">

				<?php do_action( 'hero' ); ?>

			</div><!-- end container-fluid -->

		</header>

		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="500">

			<div class="navbar-header">

				<div class="navbar-brand logo">

					<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

				</div><!-- end logo -->

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

					<span class="sr-only">Toggle navigation</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</button><!-- end navbar-toggle collapsed -->

			</div><!-- end navbar-header -->

			<div id="navbar" class="navbar-collapse collapse">

				<?php 
					$args = array(
					'menu'          => 'header-menu',
					'menu_class'    => 'nav navbar-nav',
					'container'     => 'false'
				);
					wp_nav_menu( $args );
				?>

			</div><!--/.navbar-collapse -->

		</nav><!-- end navbar navbar-inverse navbar-fixed-top -->











