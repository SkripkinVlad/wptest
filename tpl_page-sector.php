<div class="sector__page">
    <?php
        get_header();
        /*
        Template Name: Page Sector
        Template Post Type: page
        */
    ?>

    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page-sector' );

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

    <div class="sectors__page-footer">
        <?php get_footer(); ?>
    </div>

</div>