<?php

/**
 * Template name: About us
 */

get_header();

/**  About Us fields */
$title_about_us_page = get_field('title_about_us_page');
$image_about_us = get_field('image_about_us');
$content_about_us_page = get_field('content_about_us_page');

/** Values fields */
$title_values_about = get_field('title_values_about');
$values_repeater_about = 'values_repeater_about';

/** Difference fields */
$title_difference_about = get_field('title_difference_about');
$difference_repeater_about = 'difference_repeater_about';

/** The Team fields */
$title_the_team_about = get_field('title_the_team_about');
$team_repeater_about = 'team_repeater_about';

/** Contact fields */
$title_contact = get_field('title_contact', 2);
$link_contact = get_field('link_contact', 2);

?>
<section class="wavy-bg">
    <h1 class="text-center fs-4xl"><?= $title_about_us_page ?></h1>
    <div class="d-flex align-flex-start justify-flex-end" id="about-text">
        <?php if ($image_about_us) : ?>
            <div class="col-12 col-lg-6 mt-24 mt-lg-0 about-image">
                <img src="<?= esc_url($image_about_us['url']) ?>" alt="<?= esc_attr($image_about_us['alt']) ?>" />
            </div>
        <?php endif ?>
        <div class="col-12 col-lg-6 mt-24 mt-lg-0">
            <div class="container">
                <div class="split-word line-2 fs-md fw-medium text-teal"><?= $content_about_us_page ?></div>
            </div>
        </div>
    </div>
</section>

<section class="blue-bg py-40 py-md-72 mt-40 mt-lg-0">
    <div class="container">
        <h2 class="text-center fs-3xl"><?= $title_values_about ?></h2>
        <?php if (have_rows($values_repeater_about)) : ?>
            <div class="d-flex justify-center gap-40 gap-md-48 mt-32">
                <?php while (have_rows($values_repeater_about)) : the_row();
                    $image = get_sub_field('image');
                    $name = get_sub_field('name');
                ?>
                    <div class="col-5 col-md-3">
                        <?php if ($image) : ?>
                            <div class="icon_white_circle">
                                <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" />
                            </div>
                        <?php endif; ?>
                        <p class="text-center fs-md mt-8"><?= $name ?></p>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>
    </div>
</section>

<section class="wavy-bg py-40 py-lg-120">
    <div class="container">
        <h2 class="text-center fs-3xl"><?= $title_difference_about ?></h2>
        <?php if (have_rows($difference_repeater_about)) : ?>
            <div class="grid-col-1  grid-col-md-2 grid-col-xl-4 mt-32 gap-24">
                <?php while (have_rows($difference_repeater_about)) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                    <div class="text-center">
                        <h3 class="ff-serif fs-serif-sm"><?= $title ?></h3>
                        <p class="fs-sm mt-8"><?= $content ?></p>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>
    </div>
</section>

<section class="services-home">
    <div class="container">
        <h2 class="text-center fs-3xl"><?= $title_the_team_about ?></h2>
        <?php if (have_rows($team_repeater_about)) : ?>
            <div class="team-slider mt-40">
                <?php while (have_rows($team_repeater_about)) : the_row();
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    $description = get_sub_field('description');
                    $image = get_sub_field('image');
                ?>
                    <div class="team-member" data-name="<?= $name ?>" data-position="<?= $position ?>" data-description="<?= $description ?>">
                        <?php if ($image) : ?>
                            <div class="image_mask">
                                <img src="<?= esc_url($image['url']) ?>" alt="<?= $position ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="text-center mt-16">
                            <h4 class="fs-lg fw-regular"><?= $name ?></h4>
                            <p class="fw-bold fs-sm mt-8"><?= $position ?></p>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif ?>
    </div>
</section>

<section class="container contact-container text-center">
    <h2 class="fs-3xl"><?= $title_contact ?></h2>
    <?php if ($link_contact) :
        $link_url = $link_contact['url'];
        $link_title = $link_contact['title'];
        $link_target = $link_contact['target'] ? $link_contact['target'] : '_self';
    ?>
        <a href="<?= esc_url($link_url); ?>" class="button circle uppercase mt-24 fw-semibold" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
    <?php endif ?>
</section>

<div class="popup">
    <div class="popup-content">
        <span class="close-icon">
            <span class="material-symbols-outlined">
                close
            </span>
        </span>
        <div class="popup-image">
            <img src="" alt="Team Member">
        </div>
        <div class="popup-info">
            <h3 class="fs-lg fw-regular"></h3>
            <p class="position fw-bold fs-sm mt-8"></p>
            <p class="description fs-sm mt-16 line-3bb"></p>
        </div>
    </div>
</div>
<?php get_footer() ?>