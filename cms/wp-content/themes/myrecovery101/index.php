<?php get_header(); ?>

<?php if (is_front_page()) : ?>
    <section>
        <div class="container text-center">

            <h1 class="fs-4xl">EMPOWERING <span class="fs-serif-xl ff-serif">you</span> ON YOUR <span class="fs-serif-xl ff-serif">recovery journey</span></h1>
        </div>
        <img src="your-image-url.jpg" alt="Recovery Image">
    </section>

    <section>
        <h2>About Us</h2>
        <p>At My Recovery 101, we have a passionate team of Support Coordinators, Psychosocial Recovery Coaches, Mental Health Nurses, and Support Workers who love helping individuals to unlock their potential and achieve their personal goals and aspirations.</p>
        <p>We understand that everyone’s recovery journey is unique, so we pride ourselves on providing a tailored and collaborative approach to every person who joins the My Recovery 101 family.</p>
        <p>Laura Holdaway, Founder of My Recovery 101</p>
        <a href="#" class="button">About Us</a>
    </section>

    <section class="our-services">
        <h2>Paving the way to your <span style="font-family: 'Courier New', monospace;">recovery</span></h2>


        <div class="slick-slider">
            <div>
                <img src="image1.jpg" alt="Support Coordination Image">
                <p>Support Coordination</p>
            </div>

            <div>
                <img src="image2.jpg" alt="Recovery Coaching Image">
                <p>Recovery Coaching</p>
            </div>

            <div>
                <img src="image3.jpg" alt="Support Work Image">
                <p>Support Work</p>
            </div>

            <div>
                <img src="image4.jpg" alt="Mental Health Nurse Image">
                <p>Mental Health Nurse</p>
            </div>

            <div>
                <img src="image5.jpg" alt="Training Image">
                <p>Training</p>
            </div>

            <div>
                <img src="image6.jpg" alt="Our Community Hub Image">
                <p>Our Community Hub</p>
            </div>
        </div>

        <a href="#" class="button">Explore more</a>
    </section>

    <section class="two-column-layout">

        <div class="our-feedback">
            <h2>OUR FEEDBACK</h2>
            <h3>At My Recovery 101, you are never just a <span style="font-family: 'Courier New', monospace;">number</span></h3>
        </div>


        <div class="slick-slider">

            <div>
                <blockquote>
                    The main way the 101 team has helped me is to give me confidence to achieve my goals and objectives!
                </blockquote>
                <p>Name Lastname</p>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <h2>Reach out today and <span>start your journey</span> towards a brighter, healthier future</h2>
            <a href="#" class="button">CONTACT US</button>
        </div>
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