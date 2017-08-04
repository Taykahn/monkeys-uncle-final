<?php 
/**
 * About Page 
 */
?>

<div class="parallax" style="background-image: "url( '<?php echo esc_url( the_field( 'hero', 327 ) ); ?>' ) ">

	<div class="container">

		<div class="about col-md-12">

			<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end row -->

		</div><!-- end about -->

	</div><!-- end container -->
