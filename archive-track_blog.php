<?php 
/**
 * Track Blog
 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type'      => 'track_blog',
		'orderby'        => 'date',
		'paged'          => $paged
		);

	$track_blog = new WP_Query( $args );

get_header(); ?>

	<div class="container track-container">

		<div id="arrow">

			<div class="col-sm-8">

				<div class="track-blog-page">

				<?php if ( $track_blog->have_posts() ) : ?>

					<?php while ( $track_blog->have_posts() ) : $track_blog->the_post(); ?>

						<div class="track-pg-content">

							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

							<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

							<h5>Categories: <?php the_category(); ?></h5>

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

							<?php the_excerpt(); ?>

						</div><!-- .track-pg-content -->

						<div class="blog-read-more-button">

							<a href="<?php the_permalink() ?>" class="blog-read-more-btn">read more</a>

						</div><!-- end blog-read-more-button --><hr>

					<?php endwhile ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end col-md-12 options border-bottom -->

				<?php endif; ?>

			</div><!-- .track-blog-page -->

			</div><!-- .col-md-8 -->

				<?php get_sidebar(); ?>

			</div><!-- end arrow -->

	</div><!-- end container -->

<?php get_footer(); ?>