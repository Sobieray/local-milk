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
	if (!is_category(array('wander-guides','pregnancy', 'infancy'))) {
		echo '<div class="small-12 medium-4 column"><p>'. $slug .'</p></div>';
		echo '<div class="small-12 medium-8 column">';
			// Get the last 10 posts in the special_cat category.
			query_posts( 'category_name='. $slug .'&posts_per_page=18' );

			while ( have_posts() ) : the_post(); {
				get_template_part( '_template-parts/content', 'display-archive-posts');
			}
			endwhile;
		echo '</div>';
	} elseif (is_category('infancy')) { //remove this logic once infancy posts are ready to be displayed
		echo '<p class="text-center screen-height">( coming soon )</p>';
	} else {
		$children = get_categories(array( 
			     	'parent' => $this_category->cat_ID,
			     	'orderby' => 'id'
			  	));
			 	foreach ( $children as $child ) {
			 		$this_category = get_category_by_slug($child->name);
			 		$grandchildren = get_categories(array( 
			 			'parent' => $this_category->cat_ID,
			 			'orderby' => 'id'
			 		));
			 		echo '<div class="small-12 medium-4 column"><p>'. $child->name .'</p></div>';
			 		echo '<div class="small-12 medium-8 column">';
			 			// Get the last 10 posts in the special_cat category.
			 			query_posts( 'category_name='. $child->name .'&posts_per_page=18' );

			 			while ( have_posts() ) : the_post(); {
			 				get_template_part( '_template-parts/content', 'display-archive-posts');
			 			}
			 			endwhile;
			 		echo '</div>';
			 	}
	}	
	?>
	
</div>
