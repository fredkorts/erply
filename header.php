<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md erply-navbar">

		<?php if ( 'container' == $container ) : ?>
			<div class="container-test">
		<?php endif; ?>
                <div class="menu-container">
                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                </div>

                <div class="settings-container">
                    <div class="social-block">
                        <a href="#" class="social" id="facebook"><img src="wp-content/themes/erply/img/facebook.png"></a>
                        <a href="#" class="social" id="twitter"><img src="wp-content/themes/erply/img/twitter.png"></a>
                        <a href="#" class="social" id="google"><img src="wp-content/themes/erply/img/google.png"></a>
                        <a href="#" class="social" id="linkedin"><img src="wp-content/themes/erply/img/linkedin.png"></a>
                    </div>
                    <div class="search-block">
                        <input type='button' class='search-toggle'/>
                    </div>
                </div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
