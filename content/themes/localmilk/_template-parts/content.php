<?php
/**
 * Template part for displaying posts.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
	<header class="entry-header">
		<?php
			$date = get_the_date('m.d.Y');
			if ( is_single() ) {
				
				the_title( '<h1 class="entry-title">', '</h1>' );
				echo 
				'<div class="post-info">';
				
					echo '<div class="entry-meta">';
					$categories = get_the_category();
	    			if ( ! empty( $categories ) ) {
	    			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
	    			}
	    			echo
	    			'</div><div class="entry-date">
						<p>'. $date .'</p>
					</div>';
    			echo '</div>';
				
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				echo 
				'<div class="post-info">';
				echo 
				'<div class="entry-meta">';
				$categories = get_the_category();
    			if ( ! empty( $categories ) ) {
    			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></div>';
    			}

    			echo 
    			'<div class="entry-date">
					<p>'. $date .'</p>
				</div></div>';
			}
		?>
	</header><!-- /.entry-header -->

	<div class="group">
		
		<div class="entry-content">
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
