<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:500,400,300,700,200" rel="stylesheet" type="text/css">
</head>

<body <?php body_class(); ?>>

	<header id="siteHeader">
		<div class="grid-container wide">
			<a href="<?php echo bloginfo('url'); ?>" id="logo" class="grid-30 tablet-grid-30 mobile-grid-100">
				<span><?php bloginfo(); ?></span>
			</a>
			<nav class="grid-70 tablet-grid-70 mobile-grid-100">
				<?php wp_nav_menu( 
				array( 'theme_location' => 'primary', 
				'menu_class' => 'nav-menu', 
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="search hide-on-mobile hide-on-tablet"><form action="' . get_bloginfo('url') . '"><input name="s" placeholder="Search"><i class="icon search-icon" onclick="document.forms[0].submit();"></i></form></li></ul>' ) ); ?>
			</nav>
		</div>
	</header>
