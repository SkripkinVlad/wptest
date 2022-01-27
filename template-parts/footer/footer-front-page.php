<footer class="site-footer footer__front__page">
    <div class="container">

        <div class="links">
            <div class="col">
                <div class="links-inner">
                    <h4 class="menu-title">Our sectors</h4>
                    <nav class="site-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-sectors',
                                'menu_id'        => 'menu-sectors',
                                'container'      => false,
                                'menu_class'     => 'main-menu'
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
            <div class="col">
                <div class="links-inner">
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
            </div>
            <div class="col">
                <div class="links-inner">
                    <h4 class="menu-title">Contact us</h4>
                    <nav class="site-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-contacts',
                                'menu_id'        => 'menu-contacts',
                                'container'      => false,
                                'menu_class'     => 'main-menu'
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div> <!-- links -->

        <div class="social_wrap">
            <?php dynamic_sidebar('social-widget'); ?>
        </div>
        <?php dynamic_sidebar('copyright'); ?>

    </div>
</footer>