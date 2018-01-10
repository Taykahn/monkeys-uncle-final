<?php
/**
 * Single The Lift
 */

include( 'partials/header2.php' ); ?>

	<section class="two-column">

		<div class="lift-sgl-col">

			<div class="single-lift">

				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<p><?php the_content(); ?></p> 

				<?php endwhile ?>

			</div><!-- .single-lift -->

		</div><!-- .lift-sgl-col -->

	</section><!-- .two-column -->

<?php get_footer(); ?>