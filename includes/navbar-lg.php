<div class="large-navbar">

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="555">

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

			</div><!--/.navbar-collapse -->

		</div><!--.nav-banner -->

	</nav><!-- end navbar navbar-inverse -->

</div><!-- end large-navbar -->