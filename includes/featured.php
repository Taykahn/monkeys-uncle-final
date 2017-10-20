<?php
/**
 * Template Name: Featured
 */
 ?>

<?php

$custom_query_args = array(
	'post_type'  => array ('track_blog', 'the_shop', 'the_lift' ), 
	'meta_key'   => '_is_ns_featured_post',
	'meta_value' => 'yes',
	);

// Get current page and append to custom query parameters array
$custom_query = new WP_Query( $custom_query_args ); ?>

<?php
global $wp_query;
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $custom_query;
?>

<?php if ( $custom_query->have_posts() ) : ?>

	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

		<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

		<h5>Categories: <?php the_category(); ?></h5>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php the_post_thumbnail(); ?>

		<p><?php the_excerpt(); ?></p>

	<?php endwhile; ?><!-- end of the loop -->

	<?php else:  ?>

	<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php
$wp_query = NULL;
$wp_query = $temp_query;
?>