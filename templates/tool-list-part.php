<?php
/**
 * Tool List
 *
 * @package monkeys-uncle/templates
 *
 *
 */
?>

	<ul id="tools">

		<?php $posts = get_field('tool_list'); ?>

		<?php if( $posts ): ?>

			<ul>

			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT)?>

			<?php setup_postdata($post); ?>

				<li>

					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

				</li>

			<?php endforeach; ?>

		</ul>

		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

	<?php endif; ?>

	</ul>
