<?php 
/**
 * The Shop
 */

	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'post_type' => 'the_shop',
		'orderby'   => 'date',
		'paged'     => $paged
		);

	$the_shop = new WP_Query( $args );

get_header(); ?>

<div id="arrow"></div>

	<div class="container">

		<div class="col-sm-8">

			<div class="shop-page">

				<?php while ( $the_shop->have_posts() ) : $the_shop->the_post(); ?>

					<div class="shop-pg-header">

						<h2><?php the_title(); ?></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

					</div><!-- .shop-pg-header -->

					<div class="shop-page-image-content">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						<p><?php the_excerpt(); ?></p>

						<div class="blog-read-more-button">

							<a href="<?php the_permalink() ?>" class="blog-read-more-btn">read more</a>

						</div><!-- end blog-read-more-button --><hr>

					</div><!-- .shop-page-image-content -->

				<?php endwhile; // end of the loop. ?>

				<div class="options border-bottom">

					<?php do_action( 'mbc_pagination' ) ?>

				</div><!-- end options border-bottom -->

				<?php wp_reset_postdata() ?>

				<?php get_post(); ?>

			</div><!-- .shop-page -->

		</div><!-- .col-sm-8 -->

		<?php get_sidebar(); ?>

	</div><!-- end container -->

<?php get_footer(); ?>