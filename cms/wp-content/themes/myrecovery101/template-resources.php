<?php

/**
 * Template name: Resources
 */

get_header();

/**  Resources fields */
$title_resources_page = get_field('title_resources_page');
$image_resources_page = get_field('image_resources_page');
$resources_repeater_page = 'resources_repeater_page';

$categories_resources = [
    'Recipes' => [
        'icon' => 'category-recipes.svg',
        'color' => 'peach'
    ],
    'Things to do' => [
        'icon' => 'category-things.svg',
        'color' => 'lavender'
    ],
    'Self-care strategies' => [
        'icon' => 'category-selfcare.svg',
        'color' => 'cyan'
    ],
    'Navigating the NDIS' => [
        'icon' => 'category-ndis.svg',
        'color' => 'purple'
    ],
];
?>

<section>
    <div class="container">
        <h1 class="text-center fs-4xl"><?= $title_resources_page ?></h1>
    </div>
    <?php if ($image_resources_page) : ?>
        <img src="<?= esc_url($image_resources_page['url']) ?>" alt="<?= esc_attr($image_resources_page['alt']) ?>" style="transform: scale(0.8); width: 100%; object-fit: contain; margin-top: 72px;" id="grow" />
    <?php endif ?>
</section>
<section class="mt-40">
    <!-- <div class="categories-container">
        <div class="container">
                <div class="category active fw-semibold">All</div>
                <div class="category fw-semibold">Recipes</div>
                <div class="category fw-semibold">Things to do</div>
                <div class="category fw-semibold">Self-care strategies</div>
                <div class="category fw-semibold">Navigating the NDIS</div>
            </div>
    </div> -->
    <div class="container">
        <?php if (have_rows($resources_repeater_page)) : ?>
            <div class="grid-col-1 grid-col-md-2  grid-col-2xl-3 col-2xl-10 m-2xl-auto gap-40 mt-40">
                <?php while (have_rows($resources_repeater_page)) : the_row();
                    $name = get_sub_field('name');
                    $category = get_sub_field('category');
                    $image = get_sub_field('image');
                    $file = get_sub_field('file');
                ?>

                    <a href="<?= $file['url']; ?>" target="_blank" class="text-black">
                        <?php if ($image) : ?>
                            <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" class="category-img" />
                        <?php endif ?>
                        <div class="category-type mt-16 <?= $categories_resources[$category[0]]['color'] ?>">
                            <img src="<?= get_template_directory_uri(); ?>/img/resources/<?= $categories_resources[$category[0]]['icon'] ?>" alt="">
                            <p class="fw-semibold"><?= $category[0] ?></p>
                        </div>
                        <p class="font-sm mt-8"><?= $name ?></p>
                    </a>

                <?php endwhile ?>
            </div>
        <?php endif ?>
    </div>
</section>

<?php get_footer() ?>