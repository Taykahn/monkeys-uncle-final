<div class="large-navbar">

	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="600">

		<div class="navbar-header">

			<div class="navbar-brand logo">

				<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

			</div><!-- end logo -->

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

	</nav><!-- end navbar navbar-inverse -->

</div><!-- end large-navbar -->