<div class="start location-top">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="location-content">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="location-text">
                    <?php the_content(); ?>
                </div>
                <div class="btn-group-2">
                    <?php if (get_field('locat_btn_1')): ?>
                        <a href="<?php the_field( 'locat_btn_link_1' ); ?>" class="btn-main btn-main-fill">
                            <?php the_field( 'locat_btn_1' ); ?>
                        </a>
                        <a href="<?php the_field( 'locat_btn_link_2' ); ?>" class="btn-main btn-main-fill">
                            <?php the_field( 'locat_btn_2' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-2">

                    <div class="location__contacts">
                        <h3 class="loc-contacts-title"><?php the_field( 'loc_contact_head' ); ?></h3>
                        <div class="loc-email-white"><?php the_field( 'loc_contact_email' ); ?></div>

                        <div class="contact-group">
                            <div class="loc-contact-uk"><?php the_field( 'loc_contact_info_uk' ); ?></div>
                            <div class="contact-phone"><?php the_field( 'loc_phone_uk' ); ?></div>
                        </div>

                        <div class="contact-group">
                            <div class="loc-contact-usa"><?php the_field( 'loc_contact_info_usa' ); ?></div>
                            <div class="contact-phone"><?php the_field( 'loc_phone_usa' ); ?></div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>