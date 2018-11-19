<?php
/**
 * Small screen Navigation
 */
?>

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

				</div><!-- .search form -->

				<ul class="nav sidebar-nav">

				<?php 
					$args = array(
					'menu'          => 'header-menu',
					'menu_class'    => 'nav navbar-nav',
					'container'     => 'false'
				);
					wp_nav_menu( $args );
				?>

			</nav>

			<div id="page-content-wrapper">

			<div class="header-logo-sm-screen">

			<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

		</div><!-- .logo -->

				<button type="button" class="hamburger is-closed" data-toggle="offcanvas">

					<span class="hamb-top"></span>
					<span class="hamb-middle"></span>
					<span class="hamb-bottom"></span>

				</button>

			</div>

		</div>

	</div>

</div><!-- .small-nav -->