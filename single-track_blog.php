<?php
/**
 * Single Track Blog
 */

include( 'partials/header2.php' ); ?>

	<section class="track-blog">

		<div class="container">

			<div class="col-sm-12">

				<div class="track-blog-single-content">

					<?php while ( have_posts()) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

						<div class="video-container">

							<?php the_field('track_videos'); ?>

						</div><!-- .video-container -->

					<?php endwhile ?>

					<?php wp_reset_postdata(); ?>

				</div><!-- .track-blog-single-content -->

			</div><!-- .col-sm-12 -->

		</div><!-- .container -->

	</section><!-- .track-blog -->

<?php get_footer(); ?>