<?php
/**
 * Chassis Single
 */

global $post;

$post_id = $post->ID;

get_header() ?>

<div id="page-title">

	<h1>Chassis</h1>

</div><!-- #page-title -->

<section id="chassis-single" class="container">

	<div class="col-sm-9">

		<article class="chassis-content">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="chassis-single-title">

						<h2><?php the_title(); ?></h2>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p>

					</div><!-- end chassis-single-title -->

				<?php endwhile ?>

			<?php endif ?>

		</article><!--.chassis-content-->

	</div><!-- .col-sm-9 -->

		<aside= id="sidebar-widget" class="col-sm-4">

			<?php get_template_part( 'sidebars/chassis-sidebar' ) ?>

		</aside>

</section><!--.container-->

<?php get_footer() ?>