<?php
/**
 * Footer
 */
?>

</main>

	<footer>

		<div class="nav-banner" style="background-image: url( '<?php the_field( 'footer_bkgd_img', 'option' ); ?>' )">

		<section class="section-1 container-fluid">

			<div class="col-md-6 ftr-nav">

				<div id="footer-nav">

					<?php include( 'includes/footer-navbar.php' ); ?>

				</div><!-- end footer-nav -->

			</div><!-- end col-md-6 -->

			<div class="col-md-6">

				<div class="copyright">

					<a href="http://www.kcbmwclub.com/"><p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p></a>

				</div><!-- end copyright -->

			</div><!-- end col-md-6 -->

		</section><!-- end section-1 -->

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>