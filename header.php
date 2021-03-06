<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<?php // mobile meta ?>
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>
		<?php if(is_home()) { echo "Home"; echo " | "; echo bloginfo("name"); } else { echo wp_title(' | ','true','right'); } ?>
	</title>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/img/apple-touch-icon.png" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><![endif]-->
	<?php // or, set /favicon.ico for IE10 windows ?>
	<meta name="msapplication-TileColor" content="#123456" />
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/img/win8-tile-icon.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css" />

	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<?php wp_nav_menu(array(
			'theme_location' => 'Main Menu',
			'menu'           => 'Main Menu',
			'container'      => 'nav',
			'depth'          => 1
		)); ?>
	</header>
	<main>
