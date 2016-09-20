<?php
/**
 * Default Page Template
 */

get_header();
?>
<div class="cushion">
	<?php $bgImage = get_field('hero_image'); ?>
	<header id="top" class="entry-header" style="background-image: url(<?php echo $bgImage['url']; ?>)">
	<?php if (is_page('shop')) :  $logo = get_field('logo', 'option'); ?>
		<div class="shop-title">
			<img src="<?php echo $logo['url']; ?>" >
			<h1>Shop</h1>
		</div>
	<?php else : ?>
		<div class="title-search">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	<?php endif; ?>

	</header><!-- .entry-header -->
</div>

<div class="row cushion">
	<?php if (is_page('faq')) {
		get_template_part('segments/faq-repeater');
	} else if (is_page('press-awards')) {
		get_template_part('segments/press-awards');
	} else if (is_page('shop')) {
		get_template_part('segments/shop-repeater');
	} else {
	    while ( have_posts() ) : the_post();
	        get_template_part( '_template-parts/content', 'page' );
	    endwhile; // End of the loop.
	} ?>
</div> <!-- /.container -->

<?php get_footer(); ?>
