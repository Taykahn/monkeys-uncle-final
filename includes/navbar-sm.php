<div class="small-navbar">

	<nav class="navbar navbar-inverse navbar-fixed-top">

	<div class="nav-banner container-fluid" style="background-image: url( '<?php the_field( 'nav_bkgd_img', 'option' ); ?>' )">

		<div class="col-sm-4">

			<div class="nav-logo">

			<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

		</div><!-- end logo -->

	</div><!-- .col-sm-4 -->

		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" id="nav-icon2" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>

			</button><!-- end navbar-toggle collapsed -->

		</div><!-- end navbar-header -->

	<div class="col-sm-8 nav-tab-col">

		<div id="navbar" class="navbar-collapse collapse">

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

		</div><!--/.navbar-collapse -->

	</div><!-- .col-sm-8 -->

	</nav><!-- end navbar navbar-inverse -->

</div><!-- end small navbar -->