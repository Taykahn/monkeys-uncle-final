<?php 
/*
 * Template Name: Chassis Page
 */

$args = array( 'post_type' => 'chassis' );

$chassis = new WP_Query( $args );

global $post;

$post_id = $post->ID;

get_header(); ?>

<div id="arrow">

	<div class="chassis-header">

		<div class="banner-chassis-title" style="background-image: url( '<?php echo esc_url( the_field( 'chassis_title_img', 'option' ) ); ?>' )">

			<h2>Chassis</h2>

			<p>Select the Chassis to see DIY repairs.</p>

		</div>

	</div><!-- end chassis-header -->

	<div class="diy-container container">

		<div class="row chassis-row">

			<div class="col-md-8 page-diy">

				<?php while ( $chassis->have_posts() ) : $chassis->the_post(); ?>

					<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

				<?php endwhile; // end of the loop. ?>

				<?php wp_reset_postdata() ?>

				<?php get_post(); ?>

			</div><!-- col-md-8 page-diy -->

			<?php get_sidebar(); ?>

		</div><!-- end row -->

	</div><!-- end container -->

</div><!-- end arrow -->

<?php get_footer(); ?>

