<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start_tmpl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'start_tmpl' ); ?></a>

	<header id="siteHeader" class="site-header">
        <div class="container">
            <a href="/" class="logo"></a>

            <a class="btn-open-menu">menu</a>
            <div class="header-content">
                <a href="/" class="header-content-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
                </a>
                <a class="btn-close-menu">menu</a>

                <nav class="mobile-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-mobile',
                            'menu_id'        => 'mobile-menu',
                            'container'      => false,
                            'menu_class'     => 'mobile-menu'
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->

                <div class="links deskto-nav">
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
            </div>
        </div>
	</header><!-- #masthead -->




