<?php 
/**
 * Template Name: Home Blog
 */

get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'paged'          => $paged
	);

$query = new WP_Query( $args );

?>

<div class="search-form">

	<?php get_search_form(); ?>

</div><!-- end search form -->

<section id="blog">

	<div class="container">

		<div class="row">

			<div class="blog-content col-md-8">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p><hr>

					<?php endwhile ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end col-md-12 options border-bottom -->

					<?php wp_reset_postdata(); ?>

				<?php endif ?>

			</div><!--.content-->

			<?php get_sidebar() ?>

		</div><!-- end row -->

	</div><!--.container-->

<?php get_footer() ?>

</section><!--#blog-->
