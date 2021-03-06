<div class="page__contacts">
    <?php get_header();
    /*
    Template Name: Page Office Locations
    Template Post Type: page
    */
    ?>
    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page-locations' );

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

    <?php get_template_part( 'template-parts/footer/footer-info-pages' ); ?>

    <?php get_footer(); ?>

</div>