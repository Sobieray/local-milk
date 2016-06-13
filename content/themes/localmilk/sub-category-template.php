<?php
/**
 * Template Name: Sub-Category
 */

get_header();
?>

<div class="cushion">

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( '_template-parts/content', 'categories' );

    endwhile; // End of the loop.
    ?>

</div> <!-- /.container -->

<?php get_footer(); ?>
