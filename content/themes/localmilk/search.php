<?php
/**
 * The template for displaying search results pages.
 */

get_header();
?>
<div class="row cushion">

	<?php
	if ( have_posts() ) : ?>

		<header class="text-center">
			<h1><?php printf( esc_html__( 'You searched for: %s', 'test' ), '<br><span>' . get_search_query() . '</span>' ); ?></h1>
			<?php 
			global $wp_query;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
			$count = $paged * 9;
			echo '<h2>Showing '. $count . ' of '. $wp_query->found_posts .' results</h2>';
			


			?>
		</header><!-- .page-header -->
		<section class="group">
		<?php
		/* Start the Loop */
		query_posts($query_string . '&posts_per_page=9');
		while ( have_posts() ) : the_post();
		

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( '_template-parts/content', 'search' );

		endwhile;
		echo '</section>';

		echo '<div class="post-navigation group column"><p>'; 
		posts_nav_link(' ','previous','next');
		echo '</p></div>';

	else :

		get_template_part( '_template-parts/content', 'none' );

	endif; ?>
	
</div> <!-- /.container -->
<?php get_footer(); ?>
