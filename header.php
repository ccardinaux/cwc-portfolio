<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CWC_Portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" rel="icon" />
<!--[if lt IE 9]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!--<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cwc-portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding grid wrap wider">
			<div class="unit whole">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $description; /* WPCS: xss ok. */ ?></a></p>
				<?php
				endif; ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="grid wrap wider">
				<div class="unit whole">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cwc-portfolio' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content grid wrap wider">
		<div class="unit whole">
