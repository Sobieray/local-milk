<?php
/**
 * The template for displaying search results pages.
 */

get_header();
?>

<div class="container">

	<?php
	if ( have_posts() ) : ?>

		<header>
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'test' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( '_template-parts/content', 'search' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( '_template-parts/content', 'none' );

	endif; ?>

</div> <!-- /.container -->

<?php get_footer(); ?>
