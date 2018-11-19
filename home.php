<?php 
/**
 * Template Name: Home Blog
 */

get_header();

if ( get_query_var( 'paged' ) ) { 
	$paged = get_query_var( 'paged' ); 
}
elseif ( get_query_var( 'page' ) ) { 
	$paged = get_query_var( 'page' ); 
}
else { 
	$paged = 1; 
}

query_posts('posts_per_page=&paged=' . $paged); 

$query = new WP_Query( array( 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes' ) );

?>

<section id="blog">

	<div id="page-title">

		<h1>Blog</h1>

	</div><!-- #page-title -->

	<div class="container">

		<div class="col-sm-9">

			<div class="blog-content">

				<?php include( 'includes/featured.php' ); ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<p><?php the_post_thumbnail(); ?></p>

						<p><?php the_excerpt(); ?></p>

						<div class="blog-read-more-button">

							<a href="<?php the_permalink() ?>" class="blog-read-more-btn">read more</a>

						</div><!-- end blog-read-more-button --><hr>

					<?php endwhile ?>

					<div class="options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end options border-bottom -->

					<?php wp_reset_postdata(); ?>

				<?php endif ?>

			</div><!--.content-->

		</div><!-- end col-md-9 -->

		<?php get_sidebar() ?>

	</div><!--.container-->

</section><!--#blog-->

<?php get_footer() ?>

