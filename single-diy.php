<?php
/**
 *  DIY Single
 *
 *  DIY Single action hooks in includes/diy-single-hooks.php
 */

global $post;

$post_id = $post->ID;

 get_header() ?>

<div id="arrow"></div>

<section class="diy-single">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="diy-single-title">

				<h2><?php the_title(); ?></h2>

			</div><!-- end diy-single-title --><br>

			<!-- Section One -->

			<?php do_action( 'warning' ); ?>

			<!-- Section Two -->

			<?php do_action( 'pl_ts_rt' ); ?>

			<!-- Section Three -->

			<?php do_action( 'procedure' ); ?>

			<!-- Section Four -->

			<?php do_action( 'image_gallery' ); ?>

			<?php wp_reset_postdata(); ?>

		<?php endwhile ?><!-- end while loop -->

	<?php endif ?><!-- end if loop -->

</section><!-- end diy-page -->

<?php get_footer(); ?>