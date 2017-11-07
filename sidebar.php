<?php 
/**
 * Sidebar
 */
?>


<div class="col-sm-4">

	<div class="sidebar">

	<?php if ( ! dynamic_sidebar( 'page' )  ): ?>

<br>

	<?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>

		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">

			<?php dynamic_sidebar( 'home_right_1' ); ?>

		</div><!-- #primary-sidebar -->

	<?php endif; ?>

	<?php endif; ?>

</div><!-- .sidebar -->

</div><!-- end col-md-3 sidebar -->