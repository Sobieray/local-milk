<?php
/**
 * The template for displaying all single posts.
 */

get_header();
?>

<div class="row cushion">
    <?php get_sidebar(); ?>
    <div class="column small-12 medium-8">
        <?php
        while ( have_posts() ) : the_post();

            get_template_part( '_template-parts/content', get_post_format() );

            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>

</div> <!-- /.row -->
<div id="popular-posts" class="row">
    <p class="title">Popular Posts</p>
    <?php 
        $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
        while ( $popularpost->have_posts() ) : $popularpost->the_post();
        echo '<div class="column small-12 medium-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            the_title('<h6 class="entry-title">', '</h6>');
        echo '</a></div>';
        endwhile;
    ?>
</div>

<?php get_footer(); ?>
