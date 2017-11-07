<?php 
/**
 * About Page 
 */
?>

<div id="arrow"></div>

	<div class="container">

		<div class="col-sm-12 about-col">

			<div class="about-page">

				<div class="about-content">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<h2><?php the_title(); ?></h2>

							<p><?php the_content(); ?></p>

						<?php endwhile; ?>

					<?php endif; ?>

				</div><!-- .about-content -->

			</div><!-- .col-md-12 -->

		</div><!-- .about-page -->

	</div><!-- .container -->
