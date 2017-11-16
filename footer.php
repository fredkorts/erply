<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="footer-container" id="wrapper-footer">
    <div class="container" id="registration">
        <div class="row">
            <div class="col-md-12">
                <h2>Lorem ipsum dolor sit <span class="fall">amet</span></h2>
                <h4>Point of Sale and Inventory software for Retail. Start your 14-day free trial. No credit card required, includes all available features.</h4>
                <form action="registration" method="post">
                    <div class="form-group registration-field">
                        <span class="sliding-span">E-mail</span>
                        <input type="text" class="registration-input" name="email"/>
                        <input type="submit" class="bttn-submit" value="Submit"/>
                    </div>
                </form>
                <p>By clicking 'Create My Account' I agree to <a href="#">Erply Terms of Service</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 menu-wrapper">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footer-nav',
                        'container_class' => 'footer-menu',
                        'container_id'    => 'footerMenu',
                        'menu_class'      => 'footer-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'footer-menu',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            </div>
        </div>
    </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

