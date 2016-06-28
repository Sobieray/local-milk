<?php
/**
 * Template part for displaying a message that posts cannot be found.
 */

?>

<section class="no-results not-found text-center screen-height">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'underscores' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'underscores' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'underscores' ); ?></p>
			<form action="/" method="get" class="closed">
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
			    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
			</form>
		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'underscores' ); ?></p>
		
			<form action="/" method="get" class="closed">
			    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
			    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
			</form>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
