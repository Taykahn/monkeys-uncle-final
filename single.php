<?php
/**
 * Single Post Page
 */

include( 'partials/header2.php' ); ?>

<section id="blog">

	<div id="arrow"></div>

	<div class="container single-container">

		<div class="col-sm-8 single-col">

			<div class="blog-content">

				<?php include( 'includes/featured.php' ); ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<p><?php the_post_thumbnail(); ?></p>

						<p><?php the_content(); ?></p>

					<?php endwhile ?>

					<div class="options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end options border-bottom -->

					<?php wp_reset_postdata(); ?>

				<?php endif ?>

			</div><!-- .content -->

		</div><!-- .col-sm-8 -->

		<?php get_sidebar() ?>

	</div><!-- .container -->

</section><!-- #blog -->

<?php get_footer(); ?>