<?php 
/**
 * The Lift
 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type' => 'the_lift',
		'posts_per_page' => 10,
		'orderby'   => 'date',
		'paged'     => $paged
		);

	$the_lift = new WP_Query( $args );

get_header(); ?>

<div class="search-form">

	<?php get_search_form(); ?>

</div><!-- end search form -->

	<div id="lift-page-explanation">

		<h2>On The Lift</h2>

		<p>This page is about all the different cars I have had on my lift.</p>

	</div><!-- end lift-page-explanation -->

	<div class="lift-page-container container">

		<div class="row">

			<div class="col-md-8 lift-page">

				<div class="page-header lift-page-title">

					<?php while ( $the_lift->have_posts() ) : $the_lift->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<div class="lift-page-image">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div><!-- end lift-page-image -->

						<div class="lift-page-content">

						<!-- the_content(); -->

						</div><!-- end lift-page-content -->

					<?php endwhile; // end of the loop. ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div>

					<?php wp_reset_postdata(); ?>

					<?php get_post(); ?>

				</div><!-- end page-header -->

			</div><!-- col-md-8 -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>
