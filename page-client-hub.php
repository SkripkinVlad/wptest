<div class="page__client__hub"
    <?php get_header(); ?>

        <main id="primary" class="site-main">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page-clienthub' );

            endwhile; // End of the loop.
            ?>
        </main>

    <?php get_template_part( 'template-parts/footer/footer-info-pages' ); ?>

    <?php get_footer(); ?>
</div>
