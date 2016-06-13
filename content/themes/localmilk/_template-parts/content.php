<?php
/**
 * Template part for displaying posts.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				}
				echo '<div class="entry-meta">';
				$categories = get_the_category();
    			if ( ! empty( $categories ) ) {
    			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
    			}
    			echo '</div>';
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				} 
				echo '<div class="entry-meta">';
				$categories = get_the_category();
    			if ( ! empty( $categories ) ) {
    			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
    			}
    			echo '</div>';
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				

			}

		if ( 'post' === get_post_type() ) : ?>
    		<div class="entry-meta">
    		<!-- <?php
    			$categories = get_the_category();
    			if ( ! empty( $categories ) ) {
    			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
    			}
    		?> -->
    		</div><!-- /.entry-meta -->
		<?php
		endif; ?>
	</header><!-- /.entry-header -->

	<div class="group">
		<div class="small-4 column entry-date">
			<p><?php the_date('m.d.Y'); ?></p>
		</div>
		<div class="small-8 column entry-content">
			<?php the_content(); ?>
		</div>
	</div><!-- /.row -->
	<?php if ( ! is_single() ) : ?>
		<div class="read-more">
			<a href="<?php echo esc_url( get_permalink() ); ?>">read more</a>
		</div>
	<?php else : ?>
		<div class="post-content">
			<?php the_field('post_content'); ?>
		</div>
	<?php endif; ?>
	<footer class="entry-footer">

	</footer><!-- /.entry-footer -->
</article><!-- /#post-## -->
