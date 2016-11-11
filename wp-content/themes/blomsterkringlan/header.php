<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/node_modules/swiper/dist/css/swiper.min.css">
		<script src="https://use.fontawesome.com/8e5b8fd17b.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/swiper/dist/js/swiper.js"></script>
		<script src="https://use.typekit.net/mlk7lnw.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php wp_head(); ?>
</head>
<body>
<header>
<div class="logo_cont">
	<h1>Blomsterkringlan</h1>
</div>
<div class="social-row">
	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	<i class="fa fa-twitter-square" aria-hidden="true"></i>
	<i class="fa fa-search" aria-hidden="true"></i>

</div>
<nav>
	<?php
	//WP-nav

	wp_nav_menu(array('theme_location'=>'main-nav','menu_class'=>'nav navbar-nav','container_class'=>'','container_id'=>''));

	?>
	</nav>
</header>
