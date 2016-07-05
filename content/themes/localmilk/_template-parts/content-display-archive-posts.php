<?php
/**
 * Template part for displaying archive posts.
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('column small-6 medium-4'); ?>>
	<?php
		if ( has_post_thumbnail() ) {
		    the_post_thumbnail();
		} 
		the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
	?>
</article>