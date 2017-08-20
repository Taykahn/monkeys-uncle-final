<?php 
/**
 * The Shop
 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type'      => 'the_shop',
		'posts_per_page' => 4,
		'orderby'        => 'date',
		'paged'          => $paged
		);

	$the_shop = new WP_Query( $args );

get_header(); ?>

<div class="search-form">

	<?php get_search_form(); ?>

</div><!-- end search form -->

	<div class="container">

		<div class="row">

			<div class="shop-page col-md-8">

				<div class="page-header">

					<?php while ( $the_shop->have_posts() ) : $the_shop->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<div class="shop-page-image-content">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

							<p><?php the_content(); ?></p><hr>

						</div><!-- end lift-page-image -->

					<?php endwhile; // end of the loop. ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

				</div><!-- end page-header -->

			</div><!-- col-md-8 -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>