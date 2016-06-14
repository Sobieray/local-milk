<?php
/**
 * Template part for displaying sub-categories in sub-category-template.php.
 *
 */
?>

<section>
 <?php $bgImage = get_field('hero_image'); ?>
	<header class="entry-header" style="background-image: url(<?php echo $bgImage['url']; ?>)">
		<div class="row title-search">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<form action="/" method="get" class="closed">
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
			    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
			</form>
		</div>


	</header><!-- .entry-header -->
	<div class="row">
		 <?php 
		 global $post;
		 $slug = get_post( $post )->post_name;
		 $this_category = get_category_by_slug($slug);
		 $categories = get_categories( array(
		     'parent'  => $this_category->cat_ID,
		 ) );
		 $result = count($categories);
		 foreach ( $categories as $category ) {

		 	if ($result > 5) {
			 	$image = get_field($category->slug, 'option');

			 	$url = get_category_link( $category->term_id );
			 	echo '<div class="column small-12 medium-4"><a href="'. $url .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
			 }else {
			 	$image = get_field($category->slug, 'option');

			 	$url = get_category_link( $category->term_id );
			 	echo '<div class="column small-12 medium-6"><a href="'. $url .'"><figure><img src="'. $image['url'] .'" alt=""><figcaption>'. $category->name .'</figcaption></figure></a></div>';
			 }
		 }
		 ?>
	</div>



	<footer class="entry-footer">

	</footer><!-- /.entry-footer -->
</section><!-- /#post-## -->
