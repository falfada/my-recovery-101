<?php wp_footer();

$social_repeater = 'social_repeater_community';
$get_in_touch_text = get_field('get_in_touch_text_community', 'option');
$phone = get_field('phone_community', 'option');
$email = get_field('email_community', 'option');
?>
<footer>
    <div class="container">
        <a href="<?= home_url() ?>" class="logo-community">Community Hub</a>
        <?php if (have_rows($social_repeater, 'option')) : ?>
            <div class="d-flex gap-24 mt-24">
                <?php while (have_rows($social_repeater, 'option')) : the_row();
                    $social = get_sub_field('social');
                    ?>
                    <?php if ($social) :
                        $link_url = $social['url'];
                        $link_title = $social['title'];
                        $link_target = $social['target'] ? $social['target'] : '_self';
                    ?>
                        <a href="<?= esc_url($link_url); ?>" class="fs-md button uppercase d-inline-flex align-center" target="<?= esc_attr($link_target); ?>">
                            <?= esc_html($link_title); ?>
                            <span class="material-symbols-outlined">arrow_outward</span>
                        </a>
                    <?php endif ?>
                <?php endwhile ?>
            </div>
        <?php endif ?>
        <p class="fs-3xl uppercase fw-semibold mt-24 mt-md-48"><?= $get_in_touch_text ?></p>
        <div class="mt-16 mt-md-32">
            <?php if ($phone) :
                $link_url = $phone['url'];
                $link_title = $phone['title'];
            ?>
                <a href="<?= esc_url($link_url); ?>" class=" fs-lg d-flex gap-8 align-center text-black">
                    <span class="material-symbols-outlined icon-button">call</span>
                    <?= esc_html($link_title); ?>
                </a>
            <?php endif ?>
            <?php if ($email) :
                $link_url = $email['url'];
                $link_title = $email['title'];
            ?>
                <a href="<?= esc_url($link_url); ?>" class=" fs-lg d-flex gap-8 align-center text-black mt-16 mt-md-32">
                    <span class="material-symbols-outlined icon-button">mail</span>
                    <?= esc_html($link_title); ?>
                </a>
            <?php endif ?>
        </div>
        <p class="mt-40 mt-md-96 fs-md">&copy; <span id="year"></span> <?= get_bloginfo('name') ?>.</p>
    </div>
</footer>
<!-- jQuery -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<!-- Split Type -->
<script src="https://unpkg.com/split-type"></script>
<script src="<?= get_template_directory_uri() ?>/js/main.js?ver=<?= wp_get_theme()->get('Version') ?>"></script>
</body>

</html>