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
			<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>);" role="banner">
		<?php } else { ?>
			<header id="masthead" class="site-header" role="banner">
		<?php } ?>


			<!--CONTACT US DETAILS --> 

		<div class="contact-box">
			<a href="tel: 0117 929 0003"><span class="fa fa-phone fa-2x"></span></a>
			<a href="mailto: hello@berthas.co.uk"><span class="fa fa-envelope fa-2x"></span></a> 
		</div>



		<!-- SITE LOGO -->

		<div class="site-logo animated fadeIn">
			<?php
				// Display the Custom Logo
				the_custom_logo();

				// No Custom Logo, just display the site's name
				if (!has_custom_logo()) {
				    ?>
				    <h1><?php bloginfo('name'); ?></h1>
				    <?php
				}
			?>
		</div>


		<!-- SITE TITLE & DESCRIPTION -->

		<div class="site-branding">


			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title animated fadeIn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title animated fadeIn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description animated fadeIn"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<div class="animated fadeIn" id="boxmenu">
			<a href="wp-content/uploads/2011/05/Menu-18Feb17.pdf" target="blank"><p>View Our Menu</p></a>
		</div>

	</header><!-- #masthead -->

		<!--NAVIGATION MENU -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'berthas' ); ?></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->


	<div id="content" class="site-content">
