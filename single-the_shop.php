<?php
/**
 * Single The Shop
 */

include( 'partials/header2.php' ); ?>

<div id="arrow"></div>

	<div class="container sgl-shop-container">

		<div class="col-sm-12">

		<div class="row shop-single">

			<?php if (have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="shop-single-content">

						<h2><?php the_title(); ?></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

					</div><!-- end shop-single-content -->

					<section class="image-section col-md-12">

						<div class="image-gallery">

							<?php include( 'partials/ig-shop.php' ); ?>

						</div><!-- end image-gallery -->

					</section><!-- col-md-12 -->

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- end shop-single row -->

</div><!-- .col-sm-12 -->

	</div><!-- end container -->

<?php get_footer(); ?>