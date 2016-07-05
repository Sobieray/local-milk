<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside class="widget-area column medium-4 order-2" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
