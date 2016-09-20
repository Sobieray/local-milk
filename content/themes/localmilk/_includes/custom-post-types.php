<?php

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function shop_init() {
    $args = array(
      'public' => true,
      'label'  => 'Shop',
      'supports' => array( 'title', 'thumbnail' ),
      'taxonomies'  => array( 'category' )
    );
    register_post_type( 'shop', $args );
}
add_action( 'init', 'shop_init' );


