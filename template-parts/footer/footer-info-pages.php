<footer class="site-footer footer__info__pages">
    <div class="container">

        <div class="solial__links__contacts">
            <ul>
                <?php $fb_link = get_field( 'fb_link' ); ?>
                <?php if ( $fb_link ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $fb_link) ; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fb-grey.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>

                <?php $inst_link = get_field( 'inst_link' ); ?>
                <?php if ( $inst_link ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $inst_link) ; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/inst-grey.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>

                <?php $linkedin_link = get_field( 'linkedin_link' ); ?>
                <?php if ( $linkedin_link ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $linkedin_link) ; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-grey.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>

                <?php $twitter_link = get_field( 'twitter_link' ); ?>
                <?php if ( $twitter_link ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $twitter_link) ; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-grey.svg" alt="">
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

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

        <?php dynamic_sidebar('copyright'); ?>

    </div>
</footer>