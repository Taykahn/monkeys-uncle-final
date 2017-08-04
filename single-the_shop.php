<?php
/**
 * Single The Shop
 */

get_header() ?>

	<div class="container">

		<div class="col-md-12">

			<div class="shop-single row">

				<?php if (have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="shop-single-content">

							<h2><?php the_title(); ?></h2>

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

			</div><!-- end shop-single -->

		</div><!-- end row -->

<?php get_footer(); ?>