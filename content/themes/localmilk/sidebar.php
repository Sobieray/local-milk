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
	<nav id="table-contents">
	<p class="title">Table of contents</p>
		<ol class=toc>
			<li><span class="roman"></span>
			 <span>COOK</span></li>
			<li><span class="roman"></span>
			 <span>GATHER</span></li>
			<li><span class="roman"></span>
			 <span>WANDER</span></li>
			<li><span class="roman"></span>
			 <span>RETREAT</span></li>
			<li><span class="roman"></span>
			 <span>MOTHERHOOD</span></li>
			<li><span class="roman"></span>
			 <span>NEST</span></li>
			<li><span class="roman"></span>
			 <span>WEAR</span></li>
			<li><span class="roman"></span>
			 <span>WELLNESS</span></li>
		</ol>
	</nav>
</aside>
