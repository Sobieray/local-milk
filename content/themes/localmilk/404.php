<?php
/**
 * 404 Page
 * Now with added GIF!
 */

get_header();
?>

<div class="row cushion">
	<div class="text-center screen-height">

		<header>
			<h1 ><?php esc_html_e( '404 Error' ); ?></h1>
		</header>

		<p><?php esc_html_e( 'The page you are looking for does not exist. Please try again.' ); ?></p>

		<form action="/" method="get" class="closed">
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
			    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
		</form>
	</div>

</div>

<?php get_footer(); ?>
