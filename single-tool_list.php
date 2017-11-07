<?php
/**
 * Tool List Single
 */

get_header() ?>

<div id="arrow"></div>

<section id="tool-list-archive" class="container">

	<article class="content col-sm-12">

		<div class="tool-list">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<img><?php the_post_thumbnail(); ?></img>

					<p><?php the_content(); ?></p>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .tool-list -->

	</article><!--.content-->

</section><!--.container-->

<?php get_footer() ?>