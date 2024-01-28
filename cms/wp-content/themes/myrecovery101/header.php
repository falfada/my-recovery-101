<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/trk2suj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Slick carousel CSS and JS -->
    <link rel="stylesheet" type="text/css" href="path/to/slick.css" />
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/slick.min.js"></script>
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
        <h1><a href="#" class="logo">My Recovery 101</a></h1>
        <ul class="grid-col-5 text-center d-desktop gap-24">
            <li><a href="#" data-replace="About Us" class="nav-link uppercase text-md text-black fw-semibold"><span>About Us</span></a></li>
            <li><a href="#" data-replace="Services" class="nav-link uppercase text-md text-black fw-semibold"><span>Services</span></a></li>
            <li><a href="#" data-replace="Resources" class="nav-link uppercase text-md text-black fw-semibold"><span>Resources</span></a></li>
            <li><a href="#" data-replace="Our Community" class="nav-link uppercase text-md text-black fw-semibold"><span>Our Community</span></a></li>
            <li><a href="#" class="button uppercase fw-semibold">Contact Us</a></li>
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