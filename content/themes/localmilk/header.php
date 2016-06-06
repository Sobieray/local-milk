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

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('page-' . $post->post_name); ?>>
