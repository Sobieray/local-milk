<?php
/**
 * Template part for displaying sub-cat archives.
 *
 */

?>

<div>
<?php if (!is_category('ingredient')) : ?>
	 <?php 
	
		 $slug = single_cat_title( '', false );
		 $this_category = get_category_by_slug($slug);
		 $categories = get_categories( array(
		     'parent'  => $this_category->cat_ID,
		 	));
		 
	echo '<div class="small-12 medium-4 column"><p>'. $slug .'</p></div>';
	echo '<div class="small-12 medium-8 column">';
		 $result = count($categories);
		 if ($result > 0) {
			 foreach ( $categories as $category ) {


					$url = get_category_link( $category->term_id );
					echo '<a class="column small-12 medium-6" href="'. $url .'"><figure><img src="" alt=""><figcaption>'. $category->name .'</figcaption></figure></a>';		 
			 }
		} else {
				// Get the last 10 posts in the special_cat category.
				query_posts( 'category_name='.$slug.'&posts_per_page=10' );

				while ( have_posts() ) : the_post(); {
					get_template_part( '_template-parts/content', 'display-archive-posts');
				}
				endwhile;
		}

		
	?>
	</div>
<?php else : ?>
		<?php 
			$children = get_categories(array( 
		    	'parent' => 4
		 	));
			foreach ( $children as $child ) {
				$this_category = get_category_by_slug($child->name);
				$grandchildren = get_categories(array( 
					'parent' => $this_category->cat_ID
				));
		    	echo '<section class="cushion group"><div class="column small-12 medium-4"><p>'. $child->name .'</p></div>
		    	<div class="column small-12 medium-8">';
		    	foreach ( $grandchildren as $grandchild ) {
		    		$url = get_category_link( $grandchild->term_id );
		    		echo '<div class="column small-12 medium-6"><a href="'. $url .'">'. $grandchild->name .'</a></div>';
		    	}
		    	echo '</div></section>';
			} 
		?>
<?php endif; ?>
</div>
