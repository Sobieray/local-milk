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
	wp_register_script( 'main', get_template_directory_uri() . '/_static/js/main.min.js', array( 'jquery' ), '', true);
	wp_enqueue_script( 'main' );

	wp_register_script('modernizr', get_template_directory_uri(). '/_static/js/modernizr.min.js', array('jquery'), '', true);
	wp_enqueue_script('modernizr');

	/* Foundation JS */
	wp_register_script('foundation', get_template_directory_uri(). '/_static/js/foundation.min.js', array('jquery'), '', true);
	wp_enqueue_script('foundation');
	wp_register_script('top-bar', get_template_directory_uri(). '/_static/js/foundation.responsiveToggle.min.js', array('foundation'), '', true);
	wp_enqueue_script('top-bar');
	wp_register_script('mediaQuery', get_template_directory_uri(). '/_static/js/foundation.util.mediaQuery.min.js', array('top-bar'), '', true);
	wp_enqueue_script('mediaQuery');

	/* Isotope Layout */
	wp_register_script('isotope', get_template_directory_uri(). '/_static/js/isotope.pkgd.min.js', array('jquery'), '', true);
	wp_enqueue_script('isotope');
}
add_action( 'wp_enqueue_scripts', 'aa_enqueue_scripts' );
