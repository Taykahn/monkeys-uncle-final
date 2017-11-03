<?php
/**
 * Tool List Single
 */

get_header() ?>

<div id="arrow"></div>

<section id="tool-list-archive" class="container">

	<article class="content col-md-12 tool-list">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>

					<img><?php the_post_thumbnail(); ?></img>

					<p><?php the_content(); ?></p>

				<?php endwhile; else: ?>

				<div class="page-header">

					<?php the_post_thumbnail(); ?>

					<h2><?php the_title(); ?></h2>

				</div><!-- end page-header -->

				<p>If you don't have this tool, stop what you're doing and take your car to a dealer...</p>

			<?php endif; ?>

	</article><!--.content-->

</section><!--.container-->

<?php get_footer() ?>