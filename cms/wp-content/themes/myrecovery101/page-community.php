<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.typekit.net/trk2suj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Slick carousel CSS and JS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>?ver=<?= wp_get_theme()->get('Version') ?>">
    <title>
        <?php
        global $page, $paged;
        wp_title('-', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');

        if ($site_description && (is_home() || is_front_page()))
            echo " - $site_description";
        ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header class="container community">
        <h1><a href="<?= home_url() ?>" class="logo">My Recovery 101</a></h1>
        <ul class="d-lg-flex text-center d-desktop gap-24 gap-xl-40">
            <li><a href="<?= home_url('/about-us/') ?>" data-replace="About Us" class="nav-link uppercase text-md text-black fw-semibold"><span>About Us</span></a></li>
            <li><a href="<?= home_url('/services/') ?>" data-replace="Services" class="nav-link uppercase text-md text-black fw-semibold"><span>Services</span></a></li>
            <li><a href="<?= home_url('/resources/') ?>" data-replace="Resources" class="nav-link uppercase text-md text-black fw-semibold"><span>Resources</span></a></li>
            <li><a href="<?= home_url('/community/') ?>" data-replace="Our Community" class="nav-link uppercase text-md text-black fw-semibold"><span>Our Community</span></a></li>
            <li><a href="<?= home_url('/contact-us/') ?>" class="button uppercase fw-semibold">Contact Us</a></li>
        </ul>
        <div class="outer-menu">
            <input class="checkbox-toggle" type="checkbox" />
            <div class="hamburger">
                <span aria-hidden='true'></span>
            </div>
            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li><a href="<?= home_url('/about-us/') ?>">About Us</a></li>
                            <li><a href="<?= home_url('/services/') ?>">Services</a></li>
                            <li><a href="<?= home_url('/resources/') ?>">Resources</a></li>
                            <li><a href="<?= home_url('/community-hub/') ?>">Our Community</a></li>
                            <li><a href="<?= home_url('/contact-us/') ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="community-bg">
        <div class="container">
            <h1 class="text-center fs-4xl">COME JOIN <span class="ff-serif fs-serif-xl">our community</span></h1>
        </div>
    </section>

    <section class="wavy-bg">
        <div class="container mt-40">
            <h2 class="fs-3xl col-2xl-10">Join us for a <span class="fs-serif-md ff-serif">week filled</span> with
                diverse activities <span class="fs-serif-md ff-serif">designed just for you</span> </h2>
            <div class="community-week mt-40">
                <div>
                    <div id="Monday" class="community-day">
                        <p class="ff-serif fs-serif-sm text-teal">MONDAY</p>
                        <div class="mt-40">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/community/mindfulness.svg" alt="">
                            <p class="fw-bold fs-2xl">Mindfulness</p>
                            <div class="community-time fw-bold">
                                10AM - 12PM
                            </div>
                        </div>
                    </div>

                    <div id="Tuesday" class="community-day">
                        <p class="ff-serif fs-serif-sm text-teal">TUESDAY</p>
                        <div class="mt-40">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/community/cooking.svg" alt="">
                            <p class="fw-bold fs-2xl">Cooking Class</p>
                            <div class="community-time fw-bold">
                                12PM - 2PM
                            </div>
                        </div>
                    </div>

                    <div id="Wednesday" class="community-day">
                        <p class="ff-serif fs-serif-sm text-teal">WEDNESDAY</p>
                        <div class="mt-40">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/community/movement.svg" alt="">
                            <p class="fw-bold fs-2xl">Dance (Movement)</p>
                            <div class="community-time fw-bold">
                                10AM - 2PM
                            </div>
                        </div>
                        <!-- Second class  -->
                        <!-- <div class="mt-40">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/community/music.svg" alt="">
                        <p class="fw-bold fs-2xl">Music Class</p>
                        <div class="community-time fw-bold">
                            2PM - 4PM
                        </div>
                    </div> -->
                    </div>

                    <div id="Thursday" class="community-day">
                        <p class="ff-serif fs-serif-sm text-teal">THURSDAY</p>
                        <div class="mt-40">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/community/art.svg" alt="">
                            <p class="fw-bold fs-2xl">Art Therapy</p>
                            <div class="community-time fw-bold">
                                10AM - 12PM
                            </div>
                        </div>
                    </div>

                    <div id="Friday" class="community-day">
                        <p class="ff-serif fs-serif-sm text-teal">FRIDAY</p>
                        <div class="mt-40">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/community/free.svg" alt="">
                            <p class="fw-bold fs-2xl">Freedom Friday (Movies)</p>
                            <div class="community-time fw-bold">
                                10AM - 3PM
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="fs-3xl mt-40">Step into the <span class="fs-serif-md ff-serif">moment:</span><br />
                Discover the <span class="fs-serif-md ff-serif">joy</span> in our <span class="fs-serif-md ff-serif">journey!</span>
            </h2>
        </div>

        <div class="community-slider-wrapper mt-24">
            <div class="community-slider">
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-1.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-2.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-3.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-4.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-5.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-6.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-7.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-8.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-9.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-10.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-11.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-12.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-13.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-14.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-15.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-16.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-17.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-18.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-19.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-20.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-21.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-22.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-23.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-24.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-25.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-26.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-27.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-28.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-29.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-30.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-31.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-32.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-33.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-34.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-35.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-36.jpg" alt="">
                </div>
                <div class="community-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/community/communityCarousel-37.jpg" alt="">
                </div>
                
            </div>
        </div>

        <div class="container mt-40 text-md-center">
            <h2 class="fs-3xl">
                Unlock a <span class="fs-serif-md ff-serif">Week of Possibilities</span>
            </h2>
            <p class="fs-sm mt-8 col-lg-9 col-2xl-5 m-auto">
                Discover the joy of community connection every day of the week. Your invitation to a week full of possibilities awaits at Our Community Hub!
            </p>
            <a href="https://myrecovery101.com.au/cms/wp-content/themes/myrecovery101/docs/communityHubInfo.pdf" target="_blank" class="button circle uppercase mt-24"><span>EXPLORE NOW</span></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/community/calendar.png" class="mt-40 d-block m-auto col-md-8 col-lg-6" alt="">
        </div>
    </section>

    <section class="lightblue-bg py-80">
        <div class="container">
            <div class="col-10 m-auto d-flex justify-space-between">
                <div class="col-12 col-lg-7">
                    <h2 class="ff-serif uppercase fs-sm">OUR FEEDBACK</h2>
                    <h3 class="fs-3xl">At Our Community Hub you are <span class="fs-serif-md ff-serif">more than a member</span></h3>
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
                                The program has given me a new lease on life opened up my social network while also learning heaps of new things and a loving safe environment!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">N.M</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">

            <a href="<?= home_url() ?>" class="logo-community">
                Community Hub
            </a>


            <div class="d-flex gap-24 mt-24">
                <a href="https://www.instagram.com/our_community_hub_2023/" target="_blank" class="fs-md button uppercase d-inline-flex align-center">
                    Instagram
                    <span class="material-symbols-outlined">
                        arrow_outward
                    </span>
                </a>
            </div>


            <p class="fs-3xl uppercase fw-semibold mt-24 mt-md-48">Get in touch</p>


            <div class="mt-16 mt-md-32">
                <a href="tel:0497855328" class=" fs-lg d-flex gap-8 align-center text-black">
                    <span class="material-symbols-outlined icon-button">
                        call
                    </span> 0497-855-328
                </a>
                <a href="mailto:info@ourcommunityhub.org" class=" fs-lg d-flex gap-8 align-center text-black mt-16 mt-md-32">
                    <span class="material-symbols-outlined icon-button">
                        mail
                    </span> info@ourcommunityhub.org
                </a>
            </div>


            <p class="mt-40 mt-md-96 fs-md">&copy; <span id="year"></span> My Recovery 101.</p>
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