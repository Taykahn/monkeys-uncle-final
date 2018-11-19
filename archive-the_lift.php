<?php 
/**
 * The Lift
 */

	get_query_var('page') ? get_query_var('page') : 1;

	$args = array(
		'post_type' => 'the_lift',
		'orderby'   => 'date',
		'paged'     => $paged
		);

	$the_lift = new WP_Query( $args );

get_header(); ?>

<div id="page-title">

	<h1>The Lift</h1>

</div><!-- #page-title -->

	<div class="container">

			<div class="col-sm-9">

				<div class="lift-page-title">

					<?php if ( $the_lift->have_posts() ) : ?>

					<?php while ( $the_lift->have_posts() ) : $the_lift->the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<div class="lift-page-image">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><hr>

						</div><!-- end lift-page-image -->

					<?php endwhile; ?>

				<?php endif; ?>

					<div class="options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- end options border-bottom -->

				</div><!-- end page-header -->

			</div><!-- col-md-9 -->

			<?php get_sidebar(); ?>

	</div><!-- end container -->

<?php get_footer(); ?>
