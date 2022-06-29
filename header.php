<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width">
	<meta name="description" content="OutRisk Underwriting Management Agency is a is a young, vibrant and purely digital insurtech that has ingrained the versatility of cutting edge digital technologies as key drivers of its operating model in a bid to meet and exceed dynamic customer needs."/>
	<meta name="keywords" content=" OutRisk, insurance, vehicle, motor, cover, personal, quote, property, vehicle insurance, get quote, motor vehicle insurance, OutRisk Insurance, full third party, zinara, zbc radio licenses, comprehensive insurance, personal insurance, business insurance, insurance news, Funeral Cash Plan, Hospital Cash Plan, Household Contents Insurance, Home Owners Insurance, Multi-peril Policy, Professional Indemnity Cover, Office Contents, Motor Traders, Motor Fleet, Plate, Goods in Transit, Group Personal Accident Cover, All Assets">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/./img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container-fluid for-header" id="outriskHeader">
        <div class="container">
            <div class="row">
                <div class="mst-flex">
                    <div class="logo">
                        <div class="log">
                            <a href="<?php echo home_url(); ?>">
                                <img class="black-logo" alt="Outrisk Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/outrisk_black_logo.png" />
                            </a>
                            <a href="<?php echo home_url(); ?>">
                                <img class="color-logo" alt="Outrisk Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/outrisk_main_logo.png" />
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
        <div id="search" class="search">
            <form autocomplete="off" role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                <label>
                    <!-- <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span> -->
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('What Are You Looking For?', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                </label>
                <!-- <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" /> -->
            </form>
        </div>
    </div>