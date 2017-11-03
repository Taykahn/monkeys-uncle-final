<?php
/**
 * DIY Archive
 */

global $post;

$post_id = $post->ID;

$args = array( 

	'post_type' => 'diy',

);

$diy=new WP_Query( $args );

get_header() ?>

<section id="diy-archive" class="container">

	<div id="arrow"></div><!-- end arrow -->

	<div class="row">

		<article class="col-md-8">

			<?php if ( $diy->have_posts() ) : ?>

				<?php while ( $diy->have_posts() ) : $diy->the_post(); ?>

					<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

				<?php endwhile ?>

			<?php endif; wp_reset_postdata() ?>

		</article><!--.content-->

		<aside id="sidebar" class="col-md-4">

			<?php get_template_part( 'sidebars/chassis-sidebar' ) ?>

		</aside>

	</div><!--.row-->

</section><!--.container-->

<?php get_footer() ?>