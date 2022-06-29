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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container-fluid for-header">
        <div class="container">
            <div class="row">
                <div class="mst-flex">
                    <div class="logo">
                        <div class="log">
                            <a href="<?php echo home_url(); ?>">
                                <img class="black-logo" alt="Outrisk Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/nango_logo.png" />
                            </a>
                        </div>
                    </div>
                    <div class="buttons-search-menu">
                        <div class="top-btns">
                            <div class="b-one">
                                <a href="claim">Claim</a>
                            </div>
                            <div class="btwo">
                                <a href="get-a-quote">Get Quote</a>
                            </div>
                        </div>
                        <div class="srch">
                            <li class="search_icon"><a class="search-trigger" href="#"><span></span></a></li>

                            <div id="search" class="search">

                            </div>

                        </div>

                        <div class="the-mnu">
                            <nav>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'site-menu clone-main-nav d-none d-lg-block',
                                ));
                                ?>
                            </nav>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>