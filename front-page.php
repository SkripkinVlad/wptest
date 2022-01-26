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

<div class="sectors">
    <div class="container">
        <div class="sectors__inner">
            <h2 class="sector-title">Our sectors</h2>

                    <div class="list__sectors">
                        <div class="list__sectors-item sector-wind">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.86636 5.59783C5.05986 6.31608 4.29581 7.11883 3.61666 7.92158C4.25337 7.11883 5.01741 6.31608 5.86636 5.59783ZM33.1174 12.6958C30.0188 11.1748 26.7503 10.4566 23.1423 10.7101C19.3221 10.9636 16.4781 12.9916 16.563 15.4843C16.7753 21.1459 24.2884 17.5968 28.4907 22.9204C33.1174 28.3706 28.4058 38.8909 14.0586 37.2431C8.83765 36.6516 4.29581 34.5391 1.02739 31.1169C0.900044 30.9901 0.687808 31.1169 0.772703 31.2859C4.21092 39.7359 18.8976 48.7351 32.226 40.2006C44.663 32.2154 42.8802 17.8503 33.1174 12.6958ZM7.86137 30.9479C10.96 32.4689 14.2284 33.1871 17.8364 32.9336C21.6567 32.6801 24.5006 30.6521 24.4157 28.1594C24.2035 22.4979 16.6904 26.0469 12.4881 20.7234C7.90382 15.2731 12.6154 4.75283 26.9626 6.40058C32.1836 6.99208 36.7254 9.10459 39.9938 12.5268C40.1212 12.6536 40.3334 12.5268 40.2485 12.3578C36.8103 3.90783 22.1236 -5.09144 8.79521 3.44308C-3.68424 11.3861 -1.85902 25.7511 7.86137 30.9479Z" fill="#30E650"/>
                            </svg>
                            <h4>
                                <?php $link_wind = get_field( 'link_wind' ); ?>
                                <?php if ( $link_wind ) : ?>
                                    <a href="<?php echo esc_url( $link_wind); ?>">Wind power</a>
                                <?php endif; ?>
                            </h4>
                        </div>
                        <div class="list__sectors-item sector-solar">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.86636 5.59783C5.05986 6.31608 4.29581 7.11883 3.61666 7.92158C4.25337 7.11883 5.01741 6.31608 5.86636 5.59783ZM33.1174 12.6958C30.0188 11.1748 26.7503 10.4566 23.1423 10.7101C19.3221 10.9636 16.4781 12.9916 16.563 15.4843C16.7753 21.1459 24.2884 17.5968 28.4907 22.9204C33.1174 28.3706 28.4058 38.8909 14.0586 37.2431C8.83765 36.6516 4.29581 34.5391 1.02739 31.1169C0.900044 30.9901 0.687808 31.1169 0.772703 31.2859C4.21092 39.7359 18.8976 48.7351 32.226 40.2006C44.663 32.2154 42.8802 17.8503 33.1174 12.6958ZM7.86137 30.9479C10.96 32.4689 14.2284 33.1871 17.8364 32.9336C21.6567 32.6801 24.5006 30.6521 24.4157 28.1594C24.2035 22.4979 16.6904 26.0469 12.4881 20.7234C7.90382 15.2731 12.6154 4.75283 26.9626 6.40058C32.1836 6.99208 36.7254 9.10459 39.9938 12.5268C40.1212 12.6536 40.3334 12.5268 40.2485 12.3578C36.8103 3.90783 22.1236 -5.09144 8.79521 3.44308C-3.68424 11.3861 -1.85902 25.7511 7.86137 30.9479Z" fill="url(#paint0_radial_2_34)"/>
                                <defs>
                                    <radialGradient id="paint0_radial_2_34" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(33 34) rotate(-130.503) scale(63.1269 63.3156)">
                                        <stop stop-color="#FF670D"/>
                                        <stop offset="1" stop-color="#FFB803"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <h4>
                                <?php $link_solar = get_field( 'link_solar' ); ?>
                                <?php if ( $link_solar ) : ?>
                                    <a href="<?php echo esc_url( $link_solar); ?>">Solar Power</a>
                                <?php endif; ?>
                            </h4>
                        </div>

                        <div class="list__sectors-item sector-hydro">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.86636 5.59783C5.05986 6.31608 4.29581 7.11883 3.61666 7.92158C4.25337 7.11883 5.01741 6.31608 5.86636 5.59783ZM33.1174 12.6958C30.0188 11.1748 26.7503 10.4566 23.1423 10.7101C19.3221 10.9636 16.4781 12.9916 16.563 15.4843C16.7753 21.1459 24.2884 17.5968 28.4907 22.9204C33.1174 28.3706 28.4058 38.8909 14.0586 37.2431C8.83765 36.6516 4.29581 34.5391 1.02739 31.1169C0.900044 30.9901 0.687808 31.1169 0.772703 31.2859C4.21092 39.7359 18.8976 48.7351 32.226 40.2006C44.663 32.2154 42.8802 17.8503 33.1174 12.6958ZM7.86137 30.9479C10.96 32.4689 14.2284 33.1871 17.8364 32.9336C21.6567 32.6801 24.5006 30.6521 24.4157 28.1594C24.2035 22.4979 16.6904 26.0469 12.4881 20.7234C7.90382 15.2731 12.6154 4.75283 26.9626 6.40058C32.1836 6.99208 36.7254 9.10459 39.9938 12.5268C40.1212 12.6536 40.3334 12.5268 40.2485 12.3578C36.8103 3.90783 22.1236 -5.09144 8.79521 3.44308C-3.68424 11.3861 -1.85902 25.7511 7.86137 30.9479Z" fill="url(#paint0_linear_2_39)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2_39" x1="29.7629" y1="41.5738" x2="11.3874" y2="1.98358" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0AD3FF"/>
                                        <stop offset="1" stop-color="#6FA0FF"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <h4>
                                <?php $link_hydro = get_field( 'link_hydro' ); ?>
                                <?php if ( $link_hydro ) : ?>
                                    <a href="<?php echo esc_url( $link_hydro); ?>">Hydro Power</a>
                                <?php endif; ?>
                            </h4>
                        </div>

                        <div class="list__sectors-item sector-energy">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.86636 5.59783C5.05986 6.31608 4.29581 7.11883 3.61666 7.92158C4.25337 7.11883 5.01741 6.31608 5.86636 5.59783ZM33.1174 12.6958C30.0188 11.1748 26.7503 10.4566 23.1423 10.7101C19.3221 10.9636 16.4781 12.9916 16.563 15.4843C16.7753 21.1459 24.2884 17.5968 28.4907 22.9204C33.1174 28.3706 28.4058 38.8909 14.0586 37.2431C8.83765 36.6516 4.29581 34.5391 1.02739 31.1169C0.900044 30.9901 0.687808 31.1169 0.772703 31.2859C4.21092 39.7359 18.8976 48.7351 32.226 40.2006C44.663 32.2154 42.8802 17.8503 33.1174 12.6958ZM7.86137 30.9479C10.96 32.4689 14.2284 33.1871 17.8364 32.9336C21.6567 32.6801 24.5006 30.6521 24.4157 28.1594C24.2035 22.4979 16.6904 26.0469 12.4881 20.7234C7.90382 15.2731 12.6154 4.75283 26.9626 6.40058C32.1836 6.99208 36.7254 9.10459 39.9938 12.5268C40.1212 12.6536 40.3334 12.5268 40.2485 12.3578C36.8103 3.90783 22.1236 -5.09144 8.79521 3.44308C-3.68424 11.3861 -1.85902 25.7511 7.86137 30.9479Z" fill="url(#paint0_linear_2_44)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2_44" x1="8.5" y1="8.5" x2="26.9035" y2="35.5656" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF0D12" stop-opacity="0.72"/>
                                        <stop offset="1" stop-color="#F42E02" stop-opacity="0.21"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <h4>
                                <?php $link_energy = get_field( 'link_energy' ); ?>
                                <?php if ( $link_energy ) : ?>
                                    <a href="<?php echo esc_url( $link_energy); ?>">Energy Storage</a>
                                <?php endif; ?>
                            </h4>
                        </div>

                        <div class="list__sectors-item sector-digital">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.86636 5.59783C5.05986 6.31608 4.29581 7.11883 3.61666 7.92158C4.25337 7.11883 5.01741 6.31608 5.86636 5.59783ZM33.1174 12.6958C30.0188 11.1748 26.7503 10.4566 23.1423 10.7101C19.3221 10.9636 16.4781 12.9916 16.563 15.4843C16.7753 21.1459 24.2884 17.5968 28.4907 22.9204C33.1174 28.3706 28.4058 38.8909 14.0586 37.2431C8.83765 36.6516 4.29581 34.5391 1.02739 31.1169C0.900044 30.9901 0.687808 31.1169 0.772703 31.2859C4.21092 39.7359 18.8976 48.7351 32.226 40.2006C44.663 32.2154 42.8802 17.8503 33.1174 12.6958ZM7.86137 30.9479C10.96 32.4689 14.2284 33.1871 17.8364 32.9336C21.6567 32.6801 24.5006 30.6521 24.4157 28.1594C24.2035 22.4979 16.6904 26.0469 12.4881 20.7234C7.90382 15.2731 12.6154 4.75283 26.9626 6.40058C32.1836 6.99208 36.7254 9.10459 39.9938 12.5268C40.1212 12.6536 40.3334 12.5268 40.2485 12.3578C36.8103 3.90783 22.1236 -5.09144 8.79521 3.44308C-3.68424 11.3861 -1.85902 25.7511 7.86137 30.9479Z" fill="url(#paint0_linear_2_49)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_2_49" x1="29.7629" y1="41.5738" x2="16.6341" y2="3.9532" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#6930E6"/>
                                        <stop offset="1" stop-color="#9E00FF"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <h4>
                                <?php $link_digital = get_field( 'link_digital' ); ?>
                                <?php if ( $link_digital ) : ?>
                                    <a href="<?php echo esc_url( $link_digital); ?>">Digital</a>
                                <?php endif; ?>
                            </h4>
                        </div>

                        <!-- bg svg big-->
                        <svg class="sector-bg-icon" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:screen">
                                <path d="M349.752 134.976C317.027 118.806 282.51 111.17 244.406 113.865C204.06 116.56 174.025 138.121 174.922 164.623C177.163 224.813 256.509 187.082 300.889 243.679C349.752 301.623 299.993 413.47 148.473 395.952C93.3342 389.663 45.368 367.204 10.8502 330.82C9.50534 329.473 7.26393 330.82 8.16049 332.617C44.4714 422.454 199.577 518.13 340.338 427.395C471.685 342.499 452.857 189.777 349.752 134.976ZM83.0238 329.024C115.748 345.194 150.266 352.83 188.37 350.135C228.716 347.44 258.751 325.879 257.854 299.378C255.613 239.187 176.267 276.918 131.887 220.321C83.472 162.377 133.231 50.5299 284.751 68.0481C339.89 74.3366 387.856 96.7958 422.374 133.18C423.719 134.527 425.96 133.18 425.064 131.383C388.753 41.5462 233.647 -54.1298 92.886 36.6052C-38.9092 121.052 -19.633 273.774 83.0238 329.024Z" />
                            </g>
                        </svg>
                    </div> <!-- list__sectors -->
        </div>
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
    <img class="img-wave-btm" src="<?php echo get_template_directory_uri(); ?>/img/wave-1.png" alt="">
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
    <img class="img-wave-top" src="<?php echo get_template_directory_uri(); ?>/img/wave-2.png" alt="">
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

<?php get_footer();
