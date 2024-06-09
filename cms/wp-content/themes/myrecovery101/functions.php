<?php

require_once get_template_directory() . '/inc/class-main-menu-walker.php';

add_action('after_setup_theme', 'theme_setup');
add_action('admin_enqueue_scripts', 'admin_style');
add_action('init', 'create_resources_cpt');
add_action('init', 'create_resource_categories_taxonomy');
add_filter('use_block_editor_for_post', '__return_false');
add_filter('upload_mimes', 'cc_mime_types');
add_filter('manage_edit-resources_sortable_columns', 'set_custom_edit_resources_sortable_columns');
add_action('manage_resources_posts_custom_column', 'display_thumbnail_column', 10, 2);
add_filter('manage_resources_posts_columns', 'add_thumbnail_column');
add_action('template_redirect', 'redirect_single_resources');
add_action('wp_enqueue_scripts', 'add_ajax_url');
add_action('wp_ajax_load_more_resources', 'load_more_resources_callback');
add_action('wp_ajax_nopriv_load_more_resources', 'load_more_resources_callback');

add_action('admin_init', 'disable_comments_post_types_support');
add_action('admin_init', 'disable_comments_dashboard');
add_action('admin_init', 'disable_comments_admin_menu_redirect');
add_action('admin_menu', 'disable_menus');
add_action('wp_before_admin_bar_render', 'admin_bar_render');
add_action('init', 'disable_comments_admin_bar');
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);

add_theme_support('post-thumbnails');

/**
 * Adding support or enabled features to theme.
 */
function theme_setup()
{
    add_theme_support('menus');
    register_nav_menus([
        'main-menu' => __('Main Menu', 'my-recovery-101'),
    ]);
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
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

/**
 * Add Custom Post Type for Resources.
 */
function create_resources_cpt()
{
    $labels = [
        'name'                  => _x('Resources', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Resource', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Resources', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Resource', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Resource', 'textdomain'),
        'new_item'              => __('New Resource', 'textdomain'),
        'edit_item'             => __('Edit Resource', 'textdomain'),
        'view_item'             => __('View Resource', 'textdomain'),
        'all_items'             => __('All Resources', 'textdomain'),
        'search_items'          => __('Search Resources', 'textdomain'),
        'parent_item_colon'     => __('Parent Resources:', 'textdomain'),
        'not_found'             => __('No resources found.', 'textdomain'),
        'not_found_in_trash'    => __('No resources found in Trash.', 'textdomain'),
        'featured_image'        => _x('Resource Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Resource archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into resource', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this resource', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter resources list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Resources list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Resources list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,  // Disable individual resource pages
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'resources', 'with_front' => false, 'pages' => false],  // Disable single pages
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'thumbnail'],
    ];

    register_post_type('resources', $args);
}

/**
 * Add Custom Taxonomy for Resources.
 */
function create_resource_categories_taxonomy()
{
    $labels = [
        'name'              => _x('Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Category', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Categories', 'textdomain'),
        'all_items'         => __('All Categories', 'textdomain'),
        'parent_item'       => __('Parent Category', 'textdomain'),
        'parent_item_colon' => __('Parent Category:', 'textdomain'),
        'edit_item'         => __('Edit Category', 'textdomain'),
        'update_item'       => __('Update Category', 'textdomain'),
        'add_new_item'      => __('Add New Category', 'textdomain'),
        'new_item_name'     => __('New Category Name', 'textdomain'),
        'menu_name'         => __('Category', 'textdomain'),
    ];

    $args = [
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'resource-category', 'with_front' => false, 'pages' => false],
    ];

    register_taxonomy('resource_category', ['resources'], $args);
}

/**
 * Redirect single resources and taxonomy pages to the archive page.
 */
function redirect_single_resources()
{
    if (is_singular('resources') || is_tax('resource_category')) {
        wp_redirect(home_url('/resources/'));
        exit();
    }
}

/**
 * Add a new column for the thumbnail before the publish date column.
 */
function add_thumbnail_column($columns)
{
    $new_columns = [];

    foreach ($columns as $key => $value) {
        if ($key === 'date') {
            $new_columns['thumbnail'] = __('Thumbnail', 'textdomain');
        }
        $new_columns[$key] = $value;
    }

    return $new_columns;
}

/**
 * Display the thumbnail in the custom column.
 */
function display_thumbnail_column($column, $post_id)
{
    if ($column === 'thumbnail') {
        $thumbnail = get_the_post_thumbnail($post_id, [80, 80]); // Thumbnail size
        echo $thumbnail;
    }
}

/**
 * Make the thumbnail column sortable.
 */
function set_custom_edit_resources_sortable_columns($columns)
{
    $columns['thumbnail'] = 'thumbnail';
    return $columns;
}

/**
 * Add custom vars to js.
 */
function add_ajax_url()
{
    wp_localize_script(
        'jquery',
        'ajax_object',
        ['ajax_url' => admin_url('admin-ajax.php')]
    );
}

/**
 * Load resources via Ajax.
 */
function load_more_resources_callback()
{
    $page = $_POST['page'];
    $posts_per_page = get_field('resources_per_page', 13);
    $offset = ($page - 1) * $posts_per_page;

    $args = [
        'post_type' => 'resources',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
    ];

    $resources_query = new WP_Query($args);

    if ($resources_query->have_posts()) {

        while ($resources_query->have_posts()) {
            $resources_query->the_post();
            $name = get_the_title();
            $categories_terms = wp_get_post_terms(get_the_ID(), 'resource_category');
            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $file = get_field('file_resource'); 
            
            $category_slugs = array();
            foreach ($categories_terms as $term) {
                $category_slugs[] = $term->slug;
            }
            $categories_list = implode(',', $category_slugs); ?>

            <a href="<?= esc_url($file['url']); ?>" target="_blank" class="text-black resource-item" data-categories="<?= esc_attr($categories_list); ?>">
                <?php if ($image) : ?>
                    <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($name); ?>" class="category-img" />
                <?php endif ?>

                    <?php foreach ($categories_terms as $term) { ?>
                        <?php
                        $category_color = get_field('color_resource_category', $term);
                        $category_icon = get_field('icon_resource_category', $term);
                        ?>
                        <div class="category-type mt-16" style="background-color: <?= esc_attr($category_color); ?>;">
                            <img src="<?= esc_url($category_icon['url']); ?>" alt="">
                            <p class="fw-semibold"><?= esc_html($term->name); ?></p>
                        </div>
                    <?php } ?>
                </div>
                <p class="font-sm mt-8"><?= esc_html($name); ?></p>
            </a>
<?php
        }

        wp_reset_postdata();
    } else {
        echo '';
    }

    wp_die();
}
