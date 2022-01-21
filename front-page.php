<?php get_header(); ?>

<div class="start">
    <div class="container">
        <h1><?php the_field( 'site_heading' ); ?></h1>
        <?php if (get_field('homepage_btn_1')): ?>
            <div class="row btn-group">
                <div class="col-2">
                    <a href="<?php the_field( 'homepage_btn_link_1' ); ?>" class="btn-main btn-left"><?php the_field( 'homepage_btn_1' ); ?></a>
                </div>
               <div class="col-2">
                   <a href="<?php the_field( 'homepage_btn_link_2' ); ?>" class="btn-main btn-right"><?php the_field( 'homepage_btn_2' ); ?></a>
               </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="services">
    <div class="container">
        <?php if( get_field('what_we_do_heading')): ?>
            <div class="services-intro">
                <h2 class="section-title">
                    <?php the_field( 'what_we_do_heading' ); ?>
                </h2>
                <p><?php the_field( 'what_we_do_descr' ); ?></p>
            </div>
        <?php endif; ?>

        <div class="service__list">
            <?php
                $query = new WP_Query( array(
                    'category_name' => 'what-we-do',
                    'order' => 'ASC'
                ) );
                if( $query->have_posts() ){
                    while( $query->have_posts() ){ $query->the_post(); ?>

                    <div class="service-item">
                        <div class="col">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col col-line">
                            <div class="service-item-text">
                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>

                <?php
                    }
                    wp_reset_postdata();
                }
                else echo 'No posts';
            ?>
        </div>
    </div>
</div>

<div class="benefits">
    <div class="container">
        <div class="row">
            <?php
                $args = array(
                'post_type' => 'benefits',
                'post_status' => 'publish',
                'posts_per_page' => '6',
                'order' => 'ASC'
                );
                $query_benefits = new WP_Query( $args );
                while ( $query_benefits->have_posts() ) : $query_benefits->the_post(); ?>
                   <div class="col-3">
                       <div class="benefit-item">
                           <div class="benefit-icon">
                               <?php the_post_thumbnail(); ?>
                           </div>
                           <h3><?php the_title(); ?><span><?php the_field( 'text_near_title' ); ?></span></h3>
                           <p><?php the_content(); ?></p>
                       </div>
                   </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<div class="reviews">
    <div class="container">
        <div class="carousel-reviews">
            <?php
            $args = array(
                'post_type' => 'reviews',
                'post_status' => 'publish',
                'posts_per_page' => '6',
                'order' => 'ASC'
            );
            $query_reviews = new WP_Query( $args );
            while ( $query_reviews->have_posts() ) : $query_reviews->the_post(); ?>
                <div class="review-item">
                    <div class="review-item-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="review-author">
                        <span><?php the_field( 'author_position' ); ?></span>
                        <?php the_field( 'company_name' ); ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>

        </div>
    </div>
</div>

<?php if (get_field('about_us_block')): ?>
    <div class="about">
        <div class="container">
            <div class="mobile-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-scroll.svg" alt="logo">
            </div>
            <div class="about-text">
                <?php the_field( 'about_us_block' ); ?>
            </div>
            <div class="circle-icon"></div>
        </div>
    </div>
<?php endif; ?>

<?php if (get_field('contact_head')): ?>
    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="contact-info">
                        <div class="head">
                            <?php the_field( 'contact_head' ); ?>
                        </div>

                        <div class="contact-inner">
                            <h3 class="contact-inner-title">Contact details</h3>
                            <div class="contact-email">
                                <a href="mailto:<?php the_field( 'contact_email' ); ?>">
                                    <?php the_field( 'contact_email' ); ?>
                                </a>
                            </div>
                            <div class="country-contacts country-uk"><?php the_field( 'contact_uk' ); ?></div>
                            <div class="country-contacts country-usa"><?php the_field( 'contact_usa' ); ?></div>
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
<?php endif; ?>

<?php get_footer();
