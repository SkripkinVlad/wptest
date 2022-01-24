<div class="start sector__start" style="background: url(<?php the_field( 'sector_bg_img' ); ?>) 50% 50% no-repeat; background-size: cover;">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="sector__intro">
            <svg class="sector__intro-ico" width="79" height="57" viewBox="0 0 79 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.2314 25.6043C26.2314 25.6043 18.6059 19.508 34.1619 8.22995L26.2314 0C26.2314 0 -2.44041 18.8984 0.304763 39.9305C0.304763 49.3797 7.93025 57 17.3858 57C26.8414 57 34.4669 49.3797 34.4669 39.9305C34.4669 33.8342 31.1117 28.6524 26.2314 25.6043Z" fill="<?php the_field( 'primary_sector_colour' ); ?>"/>
                <path d="M70.7644 25.6043C70.7644 25.6043 63.1389 19.508 78.6949 8.22995L70.7644 0C70.7644 0 42.0925 18.8984 44.8377 39.9305C44.8377 49.3797 52.4632 57 61.9188 57C71.3744 57 78.9999 49.3797 78.9999 39.9305C78.9999 33.8342 75.6447 28.6524 70.7644 25.6043Z" fill="<?php the_field( 'primary_sector_colour' ); ?>"/>
            </svg>

            <div class="sector__intro-text">
                <h4><?php the_field( 'sector_quotes_text' ); ?></h4>
                <p style="color:<?php the_field( 'primary_sector_colour' ); ?>"><?php the_field( 'sector_quotes_text_author' ); ?></p>
            </div>

        </div>
    </div>
</div>