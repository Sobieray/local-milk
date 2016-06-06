<?php
/**
 * 404 Page
 * Now with added GIF!
 */

get_header();
?>

<div class="container">

	<header>
		<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
	</header>

	<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

	<?php get_search_form(); ?>

</div>

<?php get_footer(); ?>
