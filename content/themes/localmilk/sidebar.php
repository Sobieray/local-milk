<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside class="widget-area column medium-4 order-2" role="complementary">
	<div id="popular-posts" class="show-for-small-only">
	        <p class="title">Popular Posts</p>
	    <?php 
	        $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
	        while ( $popularpost->have_posts() ) : $popularpost->the_post();
	        echo '<div class="column small-12 medium-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
	            if ( has_post_thumbnail() ) {
	                the_post_thumbnail();
	            }
	            the_title('<h6 class="entry-title">', '</h6>');
	        echo '</a></div>';
	        endwhile;
	    ?>
	</div>
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
