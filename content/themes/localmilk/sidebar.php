<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside class="widget-area column small-12 medium-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
