<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset') ?> />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Header -->
    <?php 
		$header_logo = get_field('header_logo_image', 'options');
		$header_logo_link = get_field('header_logo_link', 'options');

        $header_logo['alt'] === "" ? $header_logo['alt'] = "QDN" : "";
    ?>

    <header class="header">
        <div class="wrapper">
            <nav class="header__nav">

                <?php if(!empty($header_logo) && !empty($header_logo_link)): ?>

                    <a href="<?php echo esc_url($header_logo_link['url']); ?>" class="header__logo">

                        <picture>
                            <img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>"  width="100%" height="auto" />
                        </picture>

                    </a>

                <?php endif; ?>

                <div class="header__navbar">
                    <div class="header__close">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
                        </span>
                    </div>

                    <!-- Navbar Settings -->
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => 'header__list',
                                'item_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'add_li_class' => 'header__item'
                            ));
                        ?>
                    <?php endif; ?>
                    <!-- End Navbar Settings -->
                    
                </div>

                <div class="header__toggle">
                    <picture>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-left"
                            width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="12" x2="14" y2="12" />
                            <line x1="4" y1="18" x2="18" y2="18" />
                        </svg>
                    </picture>
                </div>

            </nav>
        </div>
    </header>
    <!-- End Header -->
