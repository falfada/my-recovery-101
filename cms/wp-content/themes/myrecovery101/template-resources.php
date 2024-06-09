<?php

/**
 * Template name: Resources
 */

get_header();

/**  Resources fields */
$title_resources_page = get_field('title_resources_page');
$image_resources_page = get_field('image_resources_page');
?>
<style>
    .resource-item.inactive {
        display: none;
    }
</style>
<section>
    <div class="container">
        <h1 class="text-center fs-4xl"><?= $title_resources_page ?></h1>
    </div>
    <?php if ($image_resources_page) : ?>
        <img src="<?= esc_url($image_resources_page['url']) ?>" alt="<?= esc_attr($image_resources_page['alt']) ?>" style="transform: scale(0.8); width: 100%; object-fit: contain; margin-top: 72px;" id="grow" />
    <?php endif ?>
</section>
<section class="mt-40">
    <div class="categories-container">
        <div class="container">
            <div class="category active" data-category="all">All</div>
            <?php
            $categories = get_terms([
                'taxonomy' => 'resource_category',
                'hide_empty' => true,
            ]);

            foreach ($categories as $category) { ?>
                <div class="category" data-category="<?= esc_attr($category->slug) ?>"><?= esc_html($category->name) ?></div>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div id="resource-container" class="grid-col-1 grid-col-md-2 grid-col-2xl-3 col-2xl-10 m-2xl-auto gap-40 mt-40">
        </div>
    </div>
    <div id="loading" style="text-align: center;display: none;width: 50px; margin: 2em auto;">
        <img src="<?= get_template_directory_uri(); ?>/img/loader.gif" alt="">
    </div>
    <div id="load-more-container" style="text-align: center; margin-top: 2em;">
        <a href="#" id="load-more-button" class="button">Load More</a>
    </div>
</section>

<?php get_footer() ?>