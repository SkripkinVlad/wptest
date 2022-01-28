<div class="start client-hub-top">
    <div class="container">
        <div class="start-info">
            <h1 class="title-color"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<div class="client-hub-bottom">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="info-bottom-content">
                    <?php the_field( 'client_hub_botom_text' ); ?>
                </div>
            </div>
            <div class="col-2">
                <?php echo do_shortcode('[contact-form-7 id="233" title="Contact form Client hub"]'); ?>
            </div>
        </div>
    </div>
</div>