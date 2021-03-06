<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/./img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container-fluid for-header">
        <div class="container">
            <div class="mst-flex">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img class="black-logo" alt="Outrisk Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/nango_logo.png" />
                    </a>
                </div>

                <div class="the-menus">
                    <div class="the-secondary-menu">
                        <div class="secondary-wrapper">
                            <nav class="desktop-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'secondary',
                                    'menu_class' => 'site-menu clone-main-nav d-none d-lg-block',
                                ));
                                ?>
                            </nav>
                            <nav class="mobile-menu">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'mobile',
                                    'menu_class' => 'site-menu clone-main-nav d-none d-lg-block',
                                ));
                                ?>
                            </nav>
                        </div>

                    </div>
                    <div class="the-primary-menu">
                        <nav class="desktop-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'site-menu clone-main-nav d-none d-lg-block',
                            ));
                            ?>
                        </nav>
                        <div class="donate-btn">
                            <a href="">Donate</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>