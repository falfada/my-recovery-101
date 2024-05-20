<?php

/**
 * Template name: Services
 */

get_header();

/**  Services fields */
$title_services_page = get_field('title_services_page');
$services_repeater = 'services_repeater';

/** Feedback fields */
$pretitle_feedback = get_field('pretitle_feedback', 2);
$title_feedback = get_field('title_feedback', 2);
$feedback_repeater = 'feedback_repeater';

/** Contact fields */
$title_contact = get_field('title_contact', 2);
$link_contact = get_field('link_contact', 2);

?>
<section>
    <h1 class="text-center fs-4xl"><?= $title_services_page ?></h1>
    <?php if (have_rows($services_repeater)) : ?>
        <div class="services-page-slider mt-24 col-10 col-2xl-12 grid-col-2xl-6 gap-2xl-16 align-center m-auto">
            <?php while (have_rows($services_repeater)) : the_row();
                $title = get_sub_field('title');
                $image = get_sub_field('image');
                $content = get_sub_field('content');
                $link = get_sub_field('link');
            ?>
                <div id="service<?= get_row_index() ?>">
                    <?php if ($image) : ?>
                        <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" class="service-image" data-title="<?= esc_html($title) ?>" data-description="<?= $content ?>" data-link="<?= $link ?>">
                    <?php endif; ?>
                    <div class="service-info hide-2xl text-center mt-16">
                        <h2 class="fs-3xl"><?= $title ?></h2>
                        <p class="fs-sm line-3"><?= $content ?></p>
                        <?php if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?= esc_url($link_url); ?>" class="button circle uppercase fw-semibold mt-24" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
                        <?php endif ?>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
        <div id="service-details" class="col-8 m-auto mt-24">
            <h2 id="service-title" class="fs-3xl text-center"></h2>
            <p id="service-description" class="fs-sm line-3 text-center"></p>
            <a href="#" id="link-service-details"></a>
        </div>
    <?php endif ?>

</section>
<section class="services-home mt-120">
    <div class="container">
        <div class="col-10 m-auto d-flex justify-space-between">
            <div class="col-12 col-lg-7">
                <h2 class="ff-serif uppercase fs-sm"><?= $pretitle_feedback ?></h2>
                <h3 class="fs-3xl"><?= $title_feedback ?></h3>
            </div>
            <div class="col-12 col-lg-4 mt-24 mt-md-120">
                <div class="col-3 col-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 104 80">
                        <g id="Group_134" data-name="Group 134" transform="translate(-1175 -3130)">
                            <text id="_" data-name="“" transform="translate(1175 3130)" fill="#298489" font-size="88" font-family="Montserrat-ExtraBoldItalic, Montserrat" font-weight="800" font-style="italic">
                                <tspan x="0" y="85">“</tspan>
                            </text>
                            <text id="_2" data-name="”" transform="translate(1226 3149)" fill="#298489" font-size="88" font-family="Montserrat-ExtraBoldItalic, Montserrat" font-weight="800" font-style="italic">
                                <tspan x="0" y="85">”</tspan>
                            </text>
                        </g>
                    </svg>
                </div>
                <?php if (have_rows($feedback_repeater, 2)) : ?>
                    <div class="slick-slider testimonials-slider">
                        <?php while (have_rows($feedback_repeater, 2)) : the_row();
                            $description = get_sub_field('description');
                            $author = get_sub_field('author');
                        ?>
                            <div>
                                <blockquote class="fs-md"><?= $description ?></blockquote>
                                <p class="underline-lavender fw-semibold fs-md mt-16"><?= $author ?></p>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

</section>

<section class="container contact-container text-center">
    <h2 class="fs-3xl">Reach out today and <span class="fs-serif-md ff-serif">start your journey</span> towards a brighter, healthier future</h2>
    <a href="<?= home_url('/contact-us/') ?>" class="button circle uppercase mt-24 fw-semibold"><span>CONTACT US</span></a>
</section>
<?php get_footer() ?>