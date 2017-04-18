<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wip_theme
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wip' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="wip-header"> <!-- CHANGE_THIS -->
                            <div class="wip-logo">
                                <?php bloginfo('name') ?>
                            </div>
                        </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation wip-primary-nav" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wip' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                
            <?php if (is_front_page()) : ?>
                <div class="wip-carousel" 
                     style="background-image:url('<?php header_image() ?>')"> <!-- CHANGE_THIS -->
                    <?php get_search_form() ?>
                </div>
            <?php endif ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
