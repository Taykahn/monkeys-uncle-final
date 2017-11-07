<?php 
/**
 * DIY Single Hooks
 */

/**
 * DIY Single Warning Section One
 *
 * @add_action warning
 *
 * @return void
 */

function warning_section() {

?>


	<section class="col-sm-12 warning-col">

		<div class="warnings">

			<h2>Warning!!!</h2>

			<p>This is a write up on how I did this project. I am not a professional and not responsible for anything you do to your car.</p>

		</div><!-- end warnings -->

	</section><!-- end col-md-12 -->


<?php

}

add_action( 'warning', 'warning_section' );

/**
 * DIY Single Parts List, Torque Specs & Required Tools Section Two
 *
 * @add_action featured_specials
 *
 * @return void
 */

function pl_ts_rt_section() {

?>

	<section class="three-column row no-max pad">

		<div class="col-sm-12 pl-ts-rt-col">

			<div class="row diy-top-boxes">

				<div class="diy-single-top-bar-wrapper">

					<div class="col-sm-4">

						<div class="parts-list">

						<h2>Parts List</h2>

						<p><?php the_field('parts_list'); ?></p>

						</div><!-- end parts-list -->

					</div><!-- end col-md-4 -->

					<div class="col-sm-4">

						<div class="torque-spec">

							<h2>Torque Specifications</h2>

							<?php the_field('torque_spec'); ?>

						</div><!-- end torque-spec -->

					</div><!-- end col-md-4 -->

					<div class="col-sm-4">

						<div class="required-tools">

							<h2>Required Tools</h2>

							<?php get_template_part( 'templates/tool-list-part' ) ?>

						</div><!-- end required-tools -->

					</div><!-- end col-md-4 -->

				</div><!-- end diy-single-top-bar-wrapper -->

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</section><!-- end two-column -->

<?php

}

add_action( 'pl_ts_rt', 'pl_ts_rt_section' );

/**
 * DIY Single The Procedure Section Three
 *
 * @add_action procedure
 *
 * @return void
 */

function procedure_section() {

?>

	<section class="one-column row no-max pad">

		<div class="col-md-12">

				<div class="diy-single-text">

					<h2>The Procedure</h2>

					<p><?php the_field('diy_procedure'); ?></p>

				</div><!-- end diy-single-text --> 

		</div><!-- end col-md-12 -->

	</section><!-- end one-column -->

<?php

}

add_action( 'procedure', 'procedure_section' );

/**
 * DIY Single Image Gallery Section Four
 *
 * @add_action image_gallery
 *
 * @return void
 */

function image_gallery_section() {

?>

	<section class="one-column row img-gallery">

		<div class="container">

				<h2><?php the_field('gallery_title'); ?></h2>

				<div class="diy-single-image-gallery">

						<?php $images = get_field('image_gallery'); ?>

						<?php if( $images ): ?>

							<ul>

								<?php foreach( $images as $image ): ?>

								<div class="col-sm-4">

									<li>

										<a href="<?php echo esc_url( $image['url'] ); ?>">

										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" /></a>

										<p><?php echo esc_html( $image['caption'] ); ?></p>

										<p><?php echo esc_html( $image['description'] ); ?></p>

									</li>

								</div><!-- end col-sm-4 -->

								<?php endforeach; ?>

							</ul>

						<?php endif; ?>

					</div><!-- end diy-single-image-gallery -->

		</div><!-- end container -->

	</section><!-- end one-column -->

<?php

}

add_action( 'image_gallery', 'image_gallery_section' );








