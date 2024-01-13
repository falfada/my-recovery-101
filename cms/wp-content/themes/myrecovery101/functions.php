<?php

function theme_setup()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-recovery-101'),
    ));
}

add_action('after_setup_theme', 'theme_setup');
