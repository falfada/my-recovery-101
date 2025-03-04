<?php get_header();

if (is_front_page()) :
    /** Hero Fields */
    $title_hero = get_field('title_hero');
    $image_hero = get_field('image_hero');
    $link_hero = get_field('link_hero');

    /** About Us Fields */
    $title_about = get_field('title_about');
    $description_about = get_field('description_about');
    $link_about = get_field('link_about');

    /** Services Fields */
    $pretitle_services = get_field('pretitle_services');
    $title_services = get_field('title_services');
    $link_all_services = get_field('link_all_services');
    $services_repeater = 'services_repeater';

    /** Feedback fields */
    $pretitle_feedback = get_field('pretitle_feedback');
    $title_feedback = get_field('title_feedback');
    $feedback_repeater = 'feedback_repeater';

    /** Contact fields */
    $title_contact = get_field('title_contact');
    $link_contact = get_field('link_contact');
?>
    <section class="hero">
        <div class="container text-center">
            <h1 class="fs-4xl text-teal anim-up-h1"><?= $title_hero ?></h1>
        </div>
        <?php if ($image_hero) : ?>
            <img src="<?= esc_url($image_hero['url']) ?>" alt="<?= esc_attr($image_hero['alt']) ?>" />
        <?php endif ?>
        <?php if ($link_hero) :
            $link_url = $link_hero['url'];
            $link_title = $link_hero['title'];
            $link_target = $link_hero['target'] ? $link_hero['target'] : '_self';
        ?>
            <div class="text-center button-container">
                <a href="<?= esc_url($link_url); ?>" class="button circle uppercase fw-semibold" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
            </div>
        <?php endif ?>
    </section>

    <section class="about-home">
        <div class="container">
            <h2 class="fs-3xl text-center text-teal"><?= $title_about ?></h2>
            <div class="col-10 m-auto">
                <?= $description_about ?>
                <?php if ($link_about) :
                    $link_url = $link_about['url'];
                    $link_title = $link_about['title'];
                    $link_target = $link_about['target'] ? $link_about['target'] : '_self';
                ?>
                    <a href="<?= esc_url($link_url); ?>" class="mt-48 button circle uppercase fw-semibold" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
                <?php endif ?>
            </div>
        </div>
    </section>

    <section class="services-home">
        <div class="container">
            <p class="ff-serif uppercase text-center fs-sm"><?= $pretitle_services ?></p>
            <h2 class="text-center fs-3xl"><?= $title_services ?></h2>
            <?php if (have_rows($services_repeater)) : ?>
                <div class="services-slider col-11 m-auto mt-48 mt-lg-80">
                    <?php while (have_rows($services_repeater)) : the_row();
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                    ?>
                        <?php if ($link) :
                            $link_url = $link['url'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?= esc_url($link_url); ?>" class="text-black" target="<?= esc_attr($link_target); ?>">
                                <?php if ($image) : ?>
                                    <img src="<?= esc_url($image['url']) ?>" alt="<?= esc_attr($image['alt']) ?>" />
                                <?php endif; ?>
                                <p class="text-center fw-semibold fs-md"><?= $title ?></p>
                            </a>
                        <?php endif ?>
                    <?php endwhile ?>
                </div>
            <?php endif ?>
        </div>
        <?php if ($link_all_services) :
            $link_url = $link_all_services['url'];
            $link_title = $link_all_services['title'];
            $link_target = $link_all_services['target'] ? $link_all_services['target'] : '_self';
        ?>
            <div class="text-center mt-40">
                <a href="<?= esc_url($link_url); ?>" class="button circle uppercase fw-semibold" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
            </div>
        <?php endif ?>
        <div class="container mt-40">
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
                    <?php if (have_rows($feedback_repeater)) : ?>
                        <div class="slick-slider testimonials-slider">
                            <?php while (have_rows($feedback_repeater)) : the_row();
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
        <h2 class="fs-3xl"><?= $title_contact ?></h2>
        <?php if ($link_contact) :
            $link_url = $link_contact['url'];
            $link_title = $link_contact['title'];
            $link_target = $link_contact['target'] ? $link_contact['target'] : '_self';
        ?>
            <a href="<?= esc_url($link_url); ?>" class="button circle uppercase mt-24 fw-semibold" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
        <?php endif ?>
    </section>
<?php else : ?>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
        <div class="container">
            <h1 class="fs-3xl text-center uppercase"><?php the_title(); ?></h1>
            <div class="col-10 m-auto mt-40">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
<?php endif; ?>


<?php get_footer() ?>