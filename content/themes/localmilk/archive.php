<?php
/**
 * The template for displaying archive pages.
 */

get_header();
?>

<div class="row cushion">	
		<?php
			get_template_part( '_template-parts/content', 'archives' );
		?>

</div><!-- .content-area -->

<?php get_footer(); ?>
