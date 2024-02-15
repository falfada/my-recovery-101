<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/trk2suj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Slick carousel CSS and JS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?ver=<?= wp_get_theme()->get('Version') ?>">
    <title>
        <?php
        global $page, $paged;
        wp_title('-', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');

        if ($site_description && (is_home() || is_front_page()))
            echo " - $site_description";
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header class="container">
        <h1><a href="<?= home_url() ?>" class="logo">My Recovery 101</a></h1>
        <ul class="d-flex text-center d-desktop gap-24 gap-xl-40">
            <li><a href="<?= home_url('/about-us/') ?>" data-replace="About Us" class="nav-link uppercase text-md text-black fw-semibold"><span>About Us</span></a></li>
            <li><a href="<?= home_url('/services/') ?>" data-replace="Services" class="nav-link uppercase text-md text-black fw-semibold"><span>Services</span></a></li>
            <li><a href="<?= home_url('/resources/') ?>" data-replace="Resources" class="nav-link uppercase text-md text-black fw-semibold"><span>Resources</span></a></li>
            <li><a href="<?= home_url('/community-hub/') ?>" data-replace="Our Community" class="nav-link uppercase text-md text-black fw-semibold"><span>Our Community</span></a></li>
            <li><a href="<?= home_url('/contact-us/') ?>" class="button uppercase fw-semibold">Contact Us</a></li>
        </ul>
        <div class="outer-menu">
            <input class="checkbox-toggle" type="checkbox" />
            <div class="hamburger">
                <span aria-hidden='true'></span>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Our Community</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'main-menu',
                    'container'      => 'nav',
                    'container_class' => 'menu-container',
                ]);
                ?> -->
    </header>