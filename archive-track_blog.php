<?php 
/**
 * Track Blog
 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type' => 'track_blog',
		'posts_per_page' => 10,
		'orderby'   => 'date',
		'paged'     => $paged
		);

	$track_blog = new WP_Query( $args );

get_header(); ?>

<div class="search-form">

	<?php get_search_form(); ?>

</div><!-- end search form -->

	<div class="container">

		<div class="track-blog row">

			<div class="col-md-8 track-blog-page ">

				<?php if ( $track_blog->have_posts() ) : ?>

					<?php while ( $track_blog->have_posts() ) : $track_blog->the_post(); ?>

						<div class="page-header">

							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

							<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

							<h5>Categories: <?php the_category(); ?></h5>

						</div><!-- end page-header -->

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<?php the_content(); ?><hr>

					<?php endwhile ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div>

				<?php endif; ?>

		</div><!-- end row -->

		<?php get_sidebar(); ?>

	</div><!-- end container -->

<?php get_footer(); ?>