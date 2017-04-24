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
			<div class="wip-header">
                            <img class="wip-logo-icon" src="<?php echo get_template_directory_uri() ?>/images/header/WipLogoSmall.png">
                            <div class="wip-logo-name">
                                <div class="wip-logo-name-I">Women</div>
                                <div class="wip-logo-name-II">in Partnership</div>
                            </div> 
                        </div>
                    <div class="wip-header-right-container">
                        <div class="wip-search-container">
                            <input type="text" class="wip-top-search-bar" id="search-value" value="Search">
                            <img class="wip-search-icon" src="<?php echo get_template_directory_uri() ?>/images/header/SearchBarIcon.png">         
                        </div>
                        <div class="social-media-link-container">
                            <img class="social-media-link-icon" src="<?php echo get_template_directory_uri() ?>/images/header/FacebookIcon.png">
                            <img class="social-media-link-icon" src="<?php echo get_template_directory_uri() ?>/images/header/InstagramIcon.png"> 
                            <a href="https://twitter.com/WIPcenter">
                            <img class="social-media-link-icon" src="<?php echo get_template_directory_uri() ?>/images/header/TwitterIcon.png">
                            </a>
                            <img class="social-media-link-icon" src="<?php echo get_template_directory_uri() ?>/images/header/YoutubeIcon.png">
                        </div>
                    </div>
                    <div style="clear:both"></div>                
		</div><!-- .site-branding -->          
		<nav id="site-navigation" class="main-navigation wip-primary-nav" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wip' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                
            <?php if (is_front_page()) : ?>
                <div class="wip-carousel-container">
                    <div class="wip-carousel" 
                        style="background-image:url('<?php header_image() ?>')"> <!-- CHANGE_THIS -->
                    </div>
                    <div class="wip-call-to-action-container">
                        <h1 class="wip-call-to-action-title">Call to Action</h1>
                        <div class="wip-call-to-action-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        <div class="wip-call-to-action-button">Click Me</div>
                    </div>    
            <?php endif ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
