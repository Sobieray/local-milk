<?php
/**
 * Template part for displaying sub-cat archives.
 *
 */

?>

<div>
	 <?php 
		 $slug = single_cat_title( '', false );
		 $this_category = get_category_by_slug($slug);
		 $categories = get_categories( array(
		     'parent'  => $this_category->cat_ID,
		 	));
	echo '<div class="small-12 medium-4 column"><p>'. $slug .'</p></div>';
	echo '<div class="small-12 medium-8 column">';
		// Get the last 10 posts in the special_cat category.
		query_posts( 'category_name='. $slug .'&posts_per_page=18' );

		while ( have_posts() ) : the_post(); {
			get_template_part( '_template-parts/content', 'display-archive-posts');
		}
		endwhile;
		
	?>
	</div>
</div>
