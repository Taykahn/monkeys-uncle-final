<?php
/**
* Header 2 
*
* Header for Single Pages
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

		<header>

			<div class="container-fluid no pad" style="background-color: #000;">

			<div id="navbar-sm">

				<div class="small-navbar">

					<div id="wrapper">

						<div class="overlay"></div>

						<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">

							<div class="col-sm-4">

								<div class="nav-logo">

									<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

								</div><!-- end logo -->

								<div class="search-form">

									<?php get_search_form(); ?>

								</div><!-- end search form -->

								<ul class="nav sidebar-nav">

								<?php 
									$args = array(
									'menu'          => 'header-menu',
									'menu_class'    => 'nav navbar-nav',
									'container'     => 'false'
								);
									wp_nav_menu( $args );
								?>

								</ul><!-- .nav .sidebar-nav -->

							</div><!-- .col-sm-4 -->

						</nav><!-- .navbar .navbar-inverse .navbar-fixed-top -->

						<div id="page-content-wrapper">

							<div class="header-logo-sm-screen">

								<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

							</div><!-- .header-logo-sm-screen -->

							<button type="button" class="hamburger is-closed" data-toggle="offcanvas">

								<span class="hamb-top"></span>
								<span class="hamb-middle"></span>
								<span class="hamb-bottom"></span>

							</button><!-- .hamburger .is-closed -->

						</div><!-- #page-content-wrapper -->

					</div><!-- #wrapper -->

				</div><!-- .small-navbar -->

			</div><!-- #navbar-sm -->

			<div id="navbar-lg">

				<div class="large-navbar">

					<nav class="navbar navbar-fixed-top">

						<div class="nav-banner container-fluid no-pad" style="background-image: url( '<?php the_field( 'nav_bkgd_img', 'option' ); ?>' )">

							<div class="col-md-4">

								<div class="nav-logo">

									<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

								</div><!-- .logo -->

							</div><!-- .col-sm-4 -->

							<div id="navbar" class="navbar-collapse collapse">

								<div class="col-md-8">

									<div class="search-form">

										<?php get_search_form(); ?>

									</div><!-- end search form -->

									<?php 
										$args = array(
										'menu'          => 'header-menu',
										'menu_class'    => 'nav navbar-nav',
										'container'     => 'false'
									);
										wp_nav_menu( $args );
									?>

								</div><!-- .col-sm-8 -->

							</div><!-- #navbar .navbar-collapse -->

						</div><!--.nav-banner -->

					</nav><!-- .navbar .navbar-inverse -->

				</div><!-- .large-navbar -->

			</div><!-- #navbar-lg -->

		</header>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'main_background_image', 'option' ) ); ?>' )">











