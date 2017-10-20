<div class="small-navbar">

	<div class="navbar-brand logo">

		<a href="http://localhost:3000/"><h1>Monkey's Uncle</h1></a>

	</div><!-- end logo -->

	<nav class="navbar navbar-inverse navbar-fixed-top">

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

</div><!-- end small navbar -->