<?php
/**
 * Chassis Single
 */

global $post;

$post_id = $post->ID;

get_header() ?>

<div id="arrow"></div>

<section id="chassis-single" class="container">

		<article class="chassis-content col-md-7">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="chassis-single-title">

						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

					</div><!-- end chassis-single-title -->

				<?php endwhile ?>

			<?php endif ?>

		</article><!--.content-->

		<aside= id="sidebar-widget" class="col-md-4">

			<?php get_template_part( 'sidebars/chassis-sidebar' ) ?>

		</aside>

</section><!--.container-->

<?php get_footer() ?>