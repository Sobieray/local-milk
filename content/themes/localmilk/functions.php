<?php
/**
 * The various functions are split up and included in the following 3 files.
 * This file is otherwise kept (mostly) bare for you to add your custom functions here.
 */

/**
 * Include optional functions common to all projects
 */
include_once('_includes/common-functions.php');
/**
 * Include Custom Post Types
 */
include_once("_includes/custom-post-types.php");
/**
 * Include scripts and stylesheets from JS plugins
 */
include_once('_includes/enqueue-scripts.php');


/**
 * Define some global variables
 * @var string $images_dir 		Directory for the theme images
 */
$images_dir = get_bloginfo('template_directory') . '/_static/images';


/**
 * Customize admin login logo
 */
// function aa_custom_login_logo() {
// 	echo '<style type="text/css">
// 	h1 a {
// 		background-image:url('. get_template_directory_uri() .'/_static/images/logo.png) !important;
// 		padding-bottom: 0px !important;
// 		margin-bottom: 0 !important;
// 		background-size: 120px !important;
// 		height: 80px !important;
// 		width: 100% !important;
// 	}
// 	#loginform .button-primary {
// 		border-color: #bbbdc0;
// 		background: #bbbdc0;
// 	}
// 	</style>';
// }
// add_action('login_head', 'aa_custom_login_logo');
