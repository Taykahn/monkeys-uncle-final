<?php
/**
 * Footer
 */
?>

</main>

	<footer>

		<div class="ftr-banner" style="background-image: url( '<?php the_field( 'footer_img', 'option' ); ?>' )">

		<div class="container">

			<div class="copyright">

				<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

			</div><!-- end copyright -->

		</div><!-- end container -->

	</footer>

		<?php wp_footer(); ?>

	</body>

</html>