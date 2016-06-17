<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">

	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

	<!-- Include FontAwesome -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">

	<!--
	This second stylesheet is for hotfixes/vanilla CSS,
	and should only be used if you are not compiling the Sass files -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vanilla-style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic|Montserrat:400,700' rel='stylesheet' type='text/css'>

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<?php 
	$images_dir = get_bloginfo('template_directory') . '/_static/images';
?>
<body <?php body_class('page-' . $post->post_name); ?>>
	<nav id="primary-nav">
		<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title">Menu</div>
		</div>

		<div class="top-bar" id="main-menu">
		  <div class="top-bar-title">
		  	<a href="<?php echo get_home_url(); ?>"><img src="<?php echo $images_dir . '/logo.png' ?>" alt="local milk logo" width="140"></a>
		  	<span class="pencil-vert-border"></span>
		  </div>
		  <div class="top-bar-left">
		    <?php wp_nav_menu( array(
		    	'container' => false,
		    	'menu' => __( 'Top Bar Menu', 'textdomain' ),
		    	'menu_class' => 'dropdown menu',
	    		'theme_location' => 'topbar-menu',
	    		'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
	    		'walker' => new F6_TOPBAR_MENU_WALKER()
			));
		    ?>
		  </div>
		   <div class="top-bar-right">
		    <?php if ( is_active_sidebar( 'social-media' ) ) : ?>
				<?php dynamic_sidebar( 'social-media' ); ?>
			<?php endif; ?>
			<span class="pencil-vert-border"></span>
			<div class="search">
				<form action="/" method="get" class="closed">
				    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="search" />
				    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" />
				</form>
				<img src="<?php bloginfo( 'template_url' ); ?>/_static/images/icons/search.png" alt="search icon">
				<span class="pencil-vert-border"></span>
			</div>
		  </div>
		</div>
		<span class="pencil-border"></span>
	</nav>

