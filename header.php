<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="description" content="iconhairstudio">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="Anders Gustavsson">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>iconhairstudio</title>
</head>
<body>
	<header>
		<div class="header-container">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/icon_logo.png" class="logotype" alt="Bild av företagets logo med texten ICON HAIRSTUDIO">
			</a>
			<div class="inner-header-container">
				<nav class="navigation-menu">
					<div><?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?></div>
				</nav><!-- navigation-menu -->
			</div><!-- .inner-header-container -->
		</div><!-- header-container -->
	</header>

