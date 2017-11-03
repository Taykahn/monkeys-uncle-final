<?php 
/**
 * About Page 
 */
?>

<div id="arrow"></div>

	<div class="container about-container">

		<div class="col-md-12">

			<div class="about-content">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end about-content -->

		</div><!-- end col-md-12 -->

	</div><!-- end container -->
