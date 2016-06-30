<?php
/**
 * Default Page Template
 */

get_header();
?>
<div class="cushion">
	<?php $bgImage = get_field('hero_image'); ?>
	<header id="top" class="entry-header" style="background-image: url(<?php echo $bgImage['url']; ?>)">
		<div class="title-search">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>


	</header><!-- .entry-header -->
</div>

<div class="row cushion">
	<?php if (is_page('faq')) {
		get_template_part('segments/faq-repeater');
	} else if (is_page('press-awards')) {
		get_template_part('segments/press-awards');
	} else {
	    while ( have_posts() ) : the_post();

	        get_template_part( '_template-parts/content', 'page' );

	    endwhile; // End of the loop.
	} ?>
</div> <!-- /.container -->

<?php get_footer(); ?>
