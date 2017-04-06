<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package berthas
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'berthas' ); ?></a>


	<!--HEADER IMAGE & DIV -->


		<?php if ( get_header_image() ) { ?>
			<header id="masthead" class="site-header-page" style="background-image: url(<?php header_image(); ?>);" role="banner">
		<?php } else { ?>
			<header id="masthead" class="site-header" role="banner">
		<?php } ?>
		
	<div class="animated fadeIn the-title">
		<?php single_post_title(); ?>
	</div>
		
	</header><!-- #masthead -->

		
		<!--NAVIGATION MENU -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'berthas' ); ?></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content">
