
<?php wp_footer(); ?>
<footer>
    <div class="container">

        <a href="<?= home_url() ?>" class="logo">
            My Recovery 101
        </a>


        <div class="d-flex gap-24 mt-24">
            <a href="#" class="fs-md button uppercase d-inline-flex align-center">
                Instagram
                <span class="material-symbols-outlined">
                    arrow_outward
                </span>
            </a>
            <a href="#" class="fs-md button uppercase d-inline-flex align-center">
                Facebook
                <span class="material-symbols-outlined">
                    arrow_outward
                </span>
            </a>
        </div>


        <p class="fs-3xl uppercase fw-semibold mt-24 mt-md-48">Get in touch</p>


        <div class="mt-16 mt-md-32">
            <a href="#" class=" fs-lg d-flex gap-8 align-center text-black">
                <span class="material-symbols-outlined icon-button">
                    call
                </span> 0407-550-728
            </a>
            <a href="#" class=" fs-lg d-flex gap-8 align-center text-black mt-16 mt-md-32">
                <span class="material-symbols-outlined icon-button">
                    mail
                </span> admin@myrecovery101.com.au
            </a>
        </div>


        <p class="mt-40 mt-md-96 fs-md">&copy; <span id="year"></span> My Recovery 101.</p>
    </div>

</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/main.js?ver=<?= wp_get_theme()->get('Version') ?>"></script>
</body>

</html>