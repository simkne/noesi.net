<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.4
 */
?>

	<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
		<div id="secondary" class="medium-2 large-2 columns widget-area" role="complementary">
			<?php dynamic_sidebar( 'main-sidebar' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>