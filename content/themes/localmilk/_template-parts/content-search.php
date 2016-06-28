<?php
/**
 * Template part for displaying results in search pages.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 medium-6 large-4 column'); ?>>
	<header class="entry-header">

		<?php 
		if ( has_post_thumbnail() ) {
		    the_post_thumbnail();
		} 
		?>
	</header><!-- .entry-header -->
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
</article><!-- #post-## -->
