<?php
/**
 * Single The Lift
 */

get_header() ?>

	<section class="two-column row no-max pad">

		<div class="col-md-12">

			<div class="row single-lift">

				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<p><?php the_content(); ?></p> 

				<?php endwhile ?>

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end two-column row no-max pad -->

<?php get_footer(); ?>