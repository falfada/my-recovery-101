<?php get_header(); ?>

<?php if (is_front_page()) : ?>
    <section class="hero">
        <div class="container text-center">

            <h1 class="fs-4xl text-teal anim-up-h1">EMPOWERING <span class="fs-serif-xl ff-serif">you</span> ON YOUR <span class="fs-serif-xl ff-serif">recovery journey</span></h1>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/home/home-hero.png" alt="Hands holding blue heart">
        <div class="text-center button-container">
            <a href="<?= home_url('/contact-us/') ?>" class="button circle uppercase fw-semibold"><span>CONTACT US</span></a>
        </div>
    </section>

    <section class="about-home">
        <div class="container">
            <h2 class="fs-3xl text-center text-teal">About <span class="fs-serif-md ff-serif">Us</span></h2>
            <div class="col-10 m-auto">
                <p class="mt-24 fs-lg line-3">At My Recovery 101, we have a passionate team of Support Coordinators, Psychosocial Recovery Coaches, Mental Health Nurses, and Support Workers who love helping individuals to unlock their potential and achieve their personal goals and aspirations. We understand that everyone’s recovery journey is unique, so we pride ourselves on providing a tailored and collaborative approach to every person who joins the My Recovery 101 family.</p>
                <p class="text-right text-light-teal mt-24"><em>Laura Holdaway, Founder of My Recovery 101</em></p>
                <a href="<?= home_url('/about-us/') ?>" class="mt-48 button circle uppercase fw-semibold"><span>About Us</span></a>
            </div>
        </div>
    </section>

    <section class="services-home">
        <div class="container">
            <p class="ff-serif uppercase text-center fs-sm">OUR SERVICES</p>
            <h2 class="text-center fs-3xl">Paving the way to <span class="fs-serif-md ff-serif">your recovery</span></h2>
            <div class="services-slider col-11 m-auto mt-48 mt-lg-80">
                <a href="<?= home_url('/services/#service1') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/support-coordination.jpg" alt="Support Coordination Image">
                    <p class="text-center fw-semibold fs-md">Support Coordination</p>
                </a>

                <a href="<?= home_url('/services/#service2') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/recovery-coaching.jpg" alt="Recovery Coaching Image">
                    <p class="text-center fw-semibold fs-md">Recovery Coaching</p>
                </a>

                <a href="<?= home_url('/services/#service3') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/support-work.jpg" alt="Support Work Image">
                    <p class="text-center fw-semibold fs-md">Support Work</p>
                </a>

                <a href="<?= home_url('/services/#service4') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/mental-health-nurse.jpg" alt="Mental Health Nurse Image">
                    <p class="text-center fw-semibold fs-md">Mental Health Nurse</p>
                </a>

                <a href="<?= home_url('/services/#service5') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/training.jpg" alt="Training Image">
                    <p class="text-center fw-semibold fs-md">Training</p>
                </a>

                <a href="<?= home_url('/services/#service6') ?>" class="text-black">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/community-hub.jpg" alt="Our Community Hub Image">
                    <p class="text-center fw-semibold fs-md">Our Community Hub</p>
                </a>
            </div>
        </div>
        <div class="text-center mt-40">
            <a href="<?= home_url('/services/') ?>" class="button circle uppercase fw-semibold"><span>Explore more</span></a>
        </div>
        <div class="container mt-40">
            <div class="col-10 m-auto d-flex justify-space-between">
                <div class="col-12 col-lg-7">
                    <h2 class="ff-serif uppercase fs-sm">OUR FEEDBACK</h2>
                    <h3 class="fs-3xl">At My Recovery 101, you are <span class="fs-serif-md ff-serif">never just a number</span></h3>
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

                    <div class="slick-slider testimonials-slider">
                        <div>
                            <blockquote class="fs-md">
                                The main way the 101 team has helped me is to give me confidence to achieve my goals and objectives!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">Name Lastname</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                The main way the 101 team has helped me is to give me confidence to achieve my goals and objectives!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">Name Lastname</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                The main way the 101 team has helped me is to give me confidence to achieve my goals and objectives!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">Name Lastname</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container contact-container text-center">
        <h2 class="fs-3xl">Reach out today and <span class="fs-serif-md ff-serif">start your journey</span> towards a brighter, healthier future</h2>
        <a href="<?= home_url('/contact-us/') ?>" class="button circle uppercase mt-24 fw-semibold"><span>CONTACT US</span></a>
    </section>
<?php else : ?>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

            <?php the_title(); ?>
            <?php the_content(); ?>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
<?php endif; ?>


<?php get_footer() ?>