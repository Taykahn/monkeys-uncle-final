<?php
/**
 * Single Track Blog
 */

get_header(); ?>

<div id="arrow"></div>

	<section class="track-blog">

		<div class="container">

			<div class="col-md-12">

				<div class="track-blog-single-content">

					<?php while ( have_posts()) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

						<div class="video-container">

							<?php the_field('track_videos'); ?>

						</div><!-- end video-container -->

					<?php endwhile ?>

					<?php wp_reset_postdata(); ?>

				</div><!-- end track-blog-single-content -->

		</div><!-- end col-md-12 -->

		</div><!-- end container -->

	</section><!-- end blog -->

<?php get_footer(); ?>