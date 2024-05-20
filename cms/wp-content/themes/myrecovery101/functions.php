<?php

require_once get_template_directory() . '/inc/class-main-menu-walker.php';

add_action('after_setup_theme', 'theme_setup');
add_action('admin_enqueue_scripts', 'admin_style');
add_filter('use_block_editor_for_post', '__return_false');
add_filter('upload_mimes', 'cc_mime_types');

add_action('admin_init', 'disable_comments_post_types_support');
add_action('admin_init', 'disable_comments_dashboard');
add_action('admin_init', 'disable_comments_admin_menu_redirect');
add_action('admin_menu', 'disable_menus');
add_action('wp_before_admin_bar_render', 'admin_bar_render');
add_action('init', 'disable_comments_admin_bar');
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);

/**
 * Adding support or enabled features to theme.
 */
function theme_setup()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-recovery-101'),
    ));
}

/**
 * Adding custom css to admin.
 */
function admin_style()
{
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/css/admin.css');
}

/** 
 * Disable support for comments and trackbacks in post types. 
 */
function disable_comments_post_types_support()
{
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}

/** 
 * Remove menu items. 
 */
function disable_menus()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

/** 
 * Redirect any user trying to access comments page. 
 */
function disable_comments_admin_menu_redirect()
{
    global $pagenow;
    if ('edit-comments.php' === $pagenow) {
        wp_safe_redirect(admin_url());
        exit;
    }
}


/** 
 * Remove comments metabox from dashboard. 
 */
function disable_comments_dashboard()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
/** 
 * Remove comments links from admin bar. 
 */
function disable_comments_admin_bar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}

/** 
 * Remove comments links from admin bar. 
 */
function admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}

/**
 * Allow SVG File through Media Uploader.
 */
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }