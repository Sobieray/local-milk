<?php
/**
 * JS plugin includes
 */
function aa_enqueue_scripts() {
	/**
	 * Enqueue Velocity JS
	 * It's faster and more extensive than jQuery for animations
	 * @link http://julian.com/research/velocity/
	 * @version 1.2.3
	 */
	wp_register_script( 'velocity', get_template_directory_uri() . '/_static/js/vendor/velocity.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'velocity' );

	/* Enqueue Main JS */
	wp_register_script( 'main', get_template_directory_uri() . '/_static/js/main.js', array( 'jquery' ), '', true);
	wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'aa_enqueue_scripts' );
