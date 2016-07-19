<?php
/**
 * Template part for displaying sub-categories in sub-category-template.php.
 *
 */
?>

<section>
 <?php $bgImage = get_field('hero_image'); ?>
	<header id="top" class="entry-header" style="background-image: url(<?php echo $bgImage['url']; ?>)">
		<div class="row title-search">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<form action="/" method="get" class="closed">
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
			    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
			</form>
		</div>


	</header><!-- .entry-header -->
	<div class="row">
		<div class="group screen-height">
		<?php 
		    global $post;
		    $slug = get_post( $post )->post_name;
		    $this_category = get_category_by_slug($slug);
		    $categories = get_categories( array(
		    	'parent'  => $this_category->cat_ID,
		    	'orderby' => 'id'
		    ) );
		    $result = count($categories);
		    if (is_page('recipes')) {
			    foreach ( $categories as $category ) {
				 	if ($result > 5) {
					 	$image = get_field($category->slug, 'option');

					 	$url = get_category_link( $category->term_id );
					 	echo '<div class="column medium-4"><a href="#'. $category->slug .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
					} else {
					 	$image = get_field($category->slug, 'option');

					 	$url = get_category_link( $category->term_id );
					 	echo '<div class="column medium-6"><a href="#'. $category->slug .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
					}
			  	}
			} else {
			    foreach ( $categories as $category ) {
				 	if ($result > 5) {
					 	$image = get_field($category->slug, 'option');

					 	$url = get_category_link( $category->term_id );
					 	echo '<div class="column medium-4"><a href="'. $url .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
					 }else {
					 	$image = get_field($category->slug, 'option');

					 	$url = get_category_link( $category->term_id );
					 	echo '<div class="column medium-4 center"><a href="'. $url .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
					 }
			  	}
			}
		 ?>
		</div>
		<?php if (is_page('recipes')) : ?>
			<div class="cushion">
			<?php 
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

			 		$result = count($grandchildren);

			 		// loop through Parent categories and display children and grandchildern
			     	echo '<section id="'. $child->slug .'" class="cushion group"><div class="column small-12 medium-4"><p>'. $child->name .'</p></div>
			     	<div class="column small-12 medium-8">';
			     	foreach ( $grandchildren as $grandchild ) {

			     		$url = get_category_link( $grandchild->term_id );
			     		$image = get_field($grandchild->slug, 'option');

			     		//one column list if categoreis are less than 6
			     		if ($result < 6) { 
			     			if ($image == true) {
			     				echo '<div class="column small-6"><a href="'. $url .'"><figure><img src="'. $image['url'] .'" alt="'. $image['alt'] .'"><figcaption>'. $grandchild->name .'</figcaption></figure></a></div>';
			     			}else {
			     				echo '<div class="medium-6 cat-list"><a class="sub-categories" href="'. $url .'">'. $grandchild->name .'</a></div>';
			     			}
			     			 
			     		}else {
			     			
			     				echo '<div class="column medium-6 cat-list"><a class="sub-categories" href="'. $url .'">'. $grandchild->name .'</a></div>';
			     		}
			     	}
			     	echo '</div><a class="scroll-to" href="#top"><span><img src="'. get_bloginfo('template_directory') . '/_static/images/back-to-top-arrow.svg" alt="scroll to top of the page"</span>back to top</a></section>';
			 	} 
			?>
			</div>
		<?php endif; ?>
	</div><!-- .row -->



	<footer class="entry-footer">

	</footer><!-- /.entry-footer -->
</section><!-- /#post-## -->
