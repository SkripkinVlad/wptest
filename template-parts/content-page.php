<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package start_tmpl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="container">
		    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
	</header><!-- .entry-header -->

    <div class="page-content">
        <div class="container">

	    <?php start_tmpl_post_thumbnail(); ?>

        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'start_tmpl' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer><!-- .entry-footer -->
            <?php endif; ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
