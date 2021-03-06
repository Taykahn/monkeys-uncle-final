<?php 
/*
 * Template Name: Chassis Page
 */

$args = array( 'post_type' => 'chassis' );

$chassis = new WP_Query( $args );

global $post;

$post_id = $post->ID;

get_header(); ?>

	<div class="chassis-header">

		<div class="banner-chassis-title" style="background-image: url( '<?php echo esc_url( the_field( 'chassis_title_img', 'option' ) ); ?>' )">

			<h2>Chassis</h2>

			<p>Select the Chassis to see DIY repairs.</p>

		</div>

	</div><!-- end chassis-header -->

	<div class="container chassis-container">

			<div class="col-sm-9">

				<div class="chassis-page">

					<?php while ( $chassis->have_posts() ) : $chassis->the_post(); ?>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<?php endwhile; // end of the loop. ?>

					<?php wp_reset_postdata() ?>

					<?php get_post(); ?>

				</div><!-- .chassis-page -->

			</div><!-- .col-sm-9 -->

			<?php get_sidebar(); ?>

	</div><!-- end container -->

<?php get_footer(); ?>

