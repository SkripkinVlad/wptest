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

    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="contact-info">
                        <div class="head">
                            <?php dynamic_sidebar('contacts_head'); ?>
                        </div>

                        <div class="contact-inner">
                            <?php dynamic_sidebar('contacts_email'); ?>
                            <?php dynamic_sidebar('contacts_uk'); ?>
                            <?php dynamic_sidebar('contacts_usa'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="contact__form">
                        <?php echo do_shortcode('[contact-form-7 id="79" title="Contact form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<footer class="site-footer">
        <div class="container">

            <?php if ( is_front_page() ) : ?>
            <div class="links">
                <div class="col">
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
            </div> <!-- links -->
            <?php endif; ?>

            <?php
                if ( is_front_page() ) : ?>
                    <div class="social_wrap social-homepage">
                        <?php dynamic_sidebar('social-widget'); ?>
                    </div>
                    <?php dynamic_sidebar('copyright'); ?>
                    <?php else : ?>

                        <div class="footer__bottom">
                          <div class="row">
                              <div class="col-2">
                                  <div class="social-inline"><?php dynamic_sidebar('social-widget'); ?></div>
                              </div>
                              <div class="col-2">
                                  <?php dynamic_sidebar('copyright'); ?>
                              </div>
                          </div>
                        </div>

                <?php endif;
            ?>

        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
