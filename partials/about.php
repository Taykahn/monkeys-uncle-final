<?php 
/**
 * About Page 
 */
?>

<div id="page-title">

	<h1>About</h1>

</div><!-- #page-title -->

<div class="container">

	<div class="col-sm-12 about-col">

		<div class="about-page">

			<div class="about-content">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .about-content -->

		</div><!-- .col-md-12 -->

	</div><!-- .about-page -->

</div><!-- .container -->
