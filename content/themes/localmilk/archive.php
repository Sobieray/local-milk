<?php
/**
 * The template for displaying archive pages.
 */

get_header();
?>

<div class="row cushion">
	
		<header class="page-header">
			<?php
				echo single_cat_title( '', false );
				wp_list_categories(); ?>
		</header><!-- .page-header -->

		<?php
			get_template_part( '_template-parts/content', 'archives' );
		?>

</div><!-- .content-area -->

<?php get_footer(); ?>
