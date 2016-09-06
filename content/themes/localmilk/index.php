<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header();
?>
<?php include 'faux-landing-page.php'; ?>
<div class="row cushion mobile-switch">
	<?php get_sidebar(); ?>
	<div class="column medium-8 order-1">
        <?php if (isset($_GET['cat'])) : ?>
           <?php
                $tocCat = $_GET['cat'];
                echo "<h3>". $tocCat . "</h3>";
                $the_query = new WP_Query(array( 'category_name' => $tocCat ));

                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part( '_template-parts/content', 'toc');
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();

                } else {
                    // no posts found
                }
            ?>
        <?php else : ?>
        	<?php if ( have_posts() ) :
        		/* Start the Loop */
        		while ( have_posts() ) : the_post();
                    get_template_part( '_template-parts/content', get_post_format() );
                endwhile;
        	endif; ?>
            <div class="post-navigation"><p><?php posts_nav_link(' ','Newer Posts','Older Posts'); ?></p></div>
        <?php endif; ?>
	</div>    
</div> <!-- /.row -->
<div id="popular-posts" class="row show-for-medium">
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
