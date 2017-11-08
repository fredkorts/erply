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
			<div class="container-wrapper">
		<?php endif; ?>
                <div class="col-md-3 col-sm-2 col-xs-2 site-branding ">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding -->
                <div class="menu-container">
                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php the_custom_logo(); ?>
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
                    <?php get_search_form( true );?>
                    <div class="search-block">
                        <input type='button' class='search-toggle'/>
                    </div>
                </div>
                <div class="toggle-menu">
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'slider',
                            'container_class' => 'slide-menu-container',
                            'container_id'    => 'sliderList',
                            'menu_class'      => 'slider-nav',
                            'fallback_cb'     => '',
                            'menu_id'         => 'slider-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                </div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav>
        <div class="secondary-menu navbar">
            <div class="secondary-wrapper">
                <div class="links-wrapper">
                    <ul>
                        <li>Call us today at 1-855-463-7759</li>
                        <li>|</li>
                        <li>Support</li>
                        <li>|</li>
                        <li>Blog</li>
                        <li>|</li>
                        <li>Pricing</li>
                    </ul>
                </div>
                <div class="button-wrapper">
                    <a href="#" class="bttn">Free Demo</a>
                    <a href="#" class="bttn">Login</a>
                </div>
            </div>
        </div><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
