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
