<?php

/**
 * Template name: Community
 */

/** Community fields */
$title_community_page = get_field('title_community_page');

/** Activities fields */
$title_activities_community = get_field('title_activities_community');
$mondays_activities_repeater = 'mondays_activities_repeater';
$tuesdays_activities_repeater = 'tuesdays_activities_repeater';
$wednesdays_activities_repeater = 'wednesdays_activities_repeater';
$thursdays_activities_repeater = 'thursdays_activities_repeater';
$fridays_activities_repeater = 'fridays_activities_repeater';

$days_of_week = [
    'Monday' => $mondays_activities_repeater,
    'Tuesday' => $tuesdays_activities_repeater,
    'Wednesday' => $wednesdays_activities_repeater,
    'Thursday' => $thursdays_activities_repeater,
    'Friday' => $fridays_activities_repeater,
];

/** Journey fields */
$title_journey_community = get_field('title_journey_community');
$gallery_journey_community = get_field('gallery_journey_community');

/** Week fields */
$title_week_community = get_field('title_week_community');
$description_week_community = get_field('description_week_community');
$file_week_community = get_field('file_week_community');

/** Our Feedback fields */
$pretitle_feedback_community = get_field('pretitle_feedback_community');
$title_feedback_community = get_field('title_feedback_community');
$feedback_repeater_community = 'feedback_repeater_community';

get_header();

?>
<section class="community-bg">
    <div class="container">
        <h1 class="text-center fs-4xl"><?= $title_community_page ?></h1>
    </div>
</section>

<section class="wavy-bg">
    <div class="container mt-40">
        <h2 class="fs-3xl col-2xl-10"><?= $title_activities_community ?></h2>
        <div class="community-week mt-40">
            <div>
                <?php
                foreach ($days_of_week as $day => $repeater) :
                    if (have_rows($repeater)) :
                ?>
                        <div id="<?= esc_attr($day) ?>" class="community-day">
                            <p class="ff-serif fs-serif-sm text-teal"><?= esc_html($day) ?></p>
                            <?php while (have_rows($repeater)) : the_row();
                                $activity = get_sub_field('activity');
                                $icon = get_sub_field('icon');
                                $schedule_repeater = 'schedule_repeater';
                            ?>
                                <div class="mt-40">
                                    <img src="<?= esc_url($icon['url']) ?>" alt="<?= esc_attr($icon['alt']) ?>" />
                                    <p class="fw-bold fs-2xl"><?= esc_html($activity) ?></p>
                                    <?php if (have_rows($schedule_repeater)) :
                                        while (have_rows($schedule_repeater)) : the_row();
                                            $time = get_sub_field('time');
                                    ?>
                                            <div class="community-time fw-bold"><?= esc_html($time) ?></div>
                                    <?php endwhile;
                                    endif;
                                    ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>

        <h2 class="fs-3xl mt-40"><?= $title_journey_community ?></h2>
    </div>

    <div class="community-slider-wrapper mt-24">
        <?php
        if ($gallery_journey_community) : ?>
            <div class="community-slider">
                <?php foreach ($gallery_journey_community as $image) : ?>
                    <div class="community-slide">
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="container mt-40 text-md-center">
        <h2 class="fs-3xl"><?= $title_week_community ?></h2>
        <p class="fs-sm mt-8 col-lg-9 col-2xl-5 m-auto"><?= $description_week_community ?></p>
        <?php if ($file_week_community) : ?>
            <a href="<?= $file_week_community['url']; ?>" target="_blank" class="button circle uppercase mt-24"><span>EXPLORE NOW</span></a>
        <?php endif ?>
        <img src="<?= get_template_directory_uri(); ?>/img/community/calendar.png" class="mt-40 d-block m-auto col-md-8 col-lg-6" alt="">
    </div>
</section>

<section class="lightblue-bg py-80">
    <div class="container">
        <div class="col-10 m-auto d-flex justify-space-between">
            <div class="col-12 col-lg-7">
                <h2 class="ff-serif uppercase fs-sm"><?= $pretitle_feedback_community ?></h2>
                <h3 class="fs-3xl"><?= $title_feedback_community ?></h3>
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
                <?php if (have_rows($feedback_repeater_community)) : ?>
                    <div class="slick-slider testimonials-slider">
                        <?php while (have_rows($feedback_repeater_community)) : the_row();
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

<?php get_footer('community') ?>