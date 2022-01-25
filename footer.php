<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start_tmpl
 */

?>

	<footer class="site-footer">
        <div class="container">
            <div class="social_wrap social-homepage">
                <?php dynamic_sidebar('social-widget'); ?>

            </div>
            <div class="links">
                <div class="col">
                    <h4 class="menu-title">Our sectors</h4>
                    <nav class="site-navigation">
                        <ul>
                            <li><a href="#">Wind power</a></li>
                            <li><a href="#">Solar power</a></li>
                            <li><a href="#">Hydro power</a></li>
                            <li><a href="#">Energy storage</a></li>
                            <li><a href="#">Digital</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <h4 class="menu-title">What we do</h4>
                    <nav id="site-navigation" class="site-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-main',
                                'menu_id'        => 'primary-menu',
                                'container'      => false,
                                'menu_class'     => 'main-menu'
                            )
                        );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col">
                    <h4 class="menu-title">Contact us</h4>
                    <nav class="site-navigation">
                        <ul>
                            <li><a href="#">Send your CV</a></li>
                            <li><a href="#">Chat to us</a></li>
                            <li><a href="#">Submit a vacancy</a></li>
                            <li><a href="#">Office locations</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <?php dynamic_sidebar('copyright'); ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
