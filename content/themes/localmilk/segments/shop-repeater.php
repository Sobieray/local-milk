<!-- code for Shop page and showing Data Filters for Isotope Filtering -->
<?php 
$slug = 'shop';
$this_category = get_category_by_slug('shop');
$categories = get_categories( array(
	'parent' => $this_category->cat_ID
) );
echo '<div class="button-group filter-button-group">';
echo '<button class="button" data-filter="*">show all</button>';
foreach ( $categories as $category ) {
	$name = $category->name;
	$slug = $category->slug;
    echo '<button class="button" data-filter=".'. $slug .'">'. $name .'</button>';
}
?>
</div>
<div class="grid">
	<?php 
		$args = array( 'post_type' => 'shop', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		  $title =  get_the_title();
		  $image = get_the_post_thumbnail();
		  $separator = ' ';
		  $thelist = '';
		  $terms = (array) get_the_category();
		  foreach($terms as $term) {    // concate
		      $thelist .= $separator . $term->slug;
		  } 
		  echo '<div class="grid-item grid-sizer'.$thelist.'">
		  <a href="'. get_field('link') .'" target="_blank"><figure>
		  	'. $image .'
		  	<figcaption>
		  		<p class="price">$ '. get_field('price') .'</p>
		  		<p class="title">'. $title .'</p>
		  	</figcaption>
		  </figure></a>
		  </div>';
	endwhile;
	?>
</div>