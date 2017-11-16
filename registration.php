<?php /* Template Name: Custom Registration Page */ ?>
<?php
/**
 * Registration template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
<div class="wrapper" id="wrapper-index">

    <div id="content" tabindex="-1">

        <div class="row">
            <div class="col-md-5 registration-area">
                <div class="main-box">
                    <form action="registration" id="registration-form-wrapper" class="registration" method="post">
                        <div class="registration-panel" id="first-panel">
                            <div class="form-group registration-field">
                                <span class="sliding-span">Your Name</span>
                                <input type="text" class="registration-input" name="your-name"/>
                            </div>
                            <div class="form-group registration-field">
                                <span class="sliding-span">E-mail</span>
                                <input type="text" class="registration-input" name="e-mail"/>
                            </div>
                            <div class="form-group registration-field">
                                <span class="sliding-span">Phone nr.</span>
                                <input type="text" class="registration-input" name="tel-nr"/>
                            </div>
                            <div class="form-group next-button">
                                <input type="button" class="bttn-next" value="Next >"/>
                            </div>
                        </div>
                        <div class="registration-panel" id="second-panel">
                            <div class="form-group registration-field">
                                <span class="sliding-span">Password</span>
                                <input type="password" class="registration-input" name="pass1"/>
                            </div>
                            <div class="form-group registration-field">
                                <span class="sliding-span">Re-type password</span>
                                <input type="password" class="registration-input" name="pass2"/>
                            </div>
                            <div class="form-group next-button">
                                <input type="button" class="bttn-next" value="Next >"/>
                            </div>
                        </div>
                        <div class="registration-panel" id="third-panel">
                            <div class="form-group registration-field">
                                <span class="sliding-span">Company name</span>
                                <input type="text" class="registration-input" name="company-name"/>
                            </div>
                            <div class="form-group registration-field">
                                <h4>How many people in your company</h4>
                            </div>
                            <div class="form-group employee-wrapper">
                                <a href="#" class="employee-value">1-15</a>
                                <a href="#" class="employee-value">15-50</a>
                                <a href="#" class="employee-value">50-150</a>
                                <a href="#" class="employee-value">150+</a>
                            </div>
                            <div class="form-group submit-button">
                                <input type="submit" class="bttn-submit" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7 distracation"></div>
            <!-- The pagination component -->
            <?php understrap_pagination(); ?>

        </div><!-- #primary -->

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

