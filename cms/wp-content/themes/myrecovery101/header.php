<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
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
    <header>
        Here goes header content.

        <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class'     => 'main-menu',
            'container'      => 'nav',
            'container_class' => 'menu-container',
        ]);
        ?>
    </header>