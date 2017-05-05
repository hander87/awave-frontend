<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7/node_modules/bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
	<!-- Theme CSS -->
	<link href="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7/awave-frontend/css/awave-frontend.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	 
	<?php wp_head(); ?> 
</head>
<body>
<div id="wrapper">