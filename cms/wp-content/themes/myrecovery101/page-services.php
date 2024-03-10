<?php get_header(); ?>
<section>
    <h1 class="text-center fs-4xl"><span class="ff-serif fs-serif-xl">our</span> SERVICES</h1>
    <div class="services-page-slider mt-24 col-10 col-2xl-12 grid-col-2xl-6 gap-2xl-16 align-center m-auto">
        <div id="service1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/support-coordination.jpg" class="service-image" data-title="Support <span class='ff-serif fs-serif-md'>Coordination</span>" data-description="Our Support Coordination service is designed to assist you to understand your NDIS plan and funding and connect you with the right supports for you. At My Recovery 101 we get to know you as an individual to ensure we understand your goals and aspirations, then work with you to develop a plan to achieve them!">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Support <span class="fs-serif-md ff-serif">Coordination</span></h2>
                <p class="fs-sm line-3">
                Our Support Coordination service is designed to assist you to understand your NDIS plan and funding and connect you with the right supports for you. At My Recovery 101 we get to know you as an individual to ensure we understand your goals and aspirations, then work with you to develop a plan to achieve them!
                </p>
            </div>
        </div>

        <div id="service2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/recovery-coaching.jpg" class="service-image" data-title="Recovery <span class='ff-serif fs-serif-md'>Coaching</span>" data-description="Our Recovery Coaches specialise in mental health to assist you on your recovery journey. We understand that everyone’s journey is unique so we pride ourselves on providing personalised supports tailored to your individual needs. We work with you to provide guidance, encouragement and strategies to best support you to overcome challenges and create a positive path forward.">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Recovery <span class="fs-serif-md ff-serif">Coaching</span></h2>
                <p class="fs-sm line-3">
                Our Recovery Coaches specialise in mental health to assist you on your recovery journey. We understand that everyone’s journey is unique so we pride ourselves on providing personalised supports tailored to your individual needs. We work with you to provide guidance, encouragement and strategies to best support you to overcome challenges and create a positive path forward.
                </p>
            </div>
        </div>

        <div id="service3">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/support-work.jpg" class="service-image" data-title="Support <span class='ff-serif fs-serif-md'>Work</span>" data-description="Our Support workers love helping individuals to live a more fulfilled and independent lifestyle, whether that be through companionship, improving social skills, supporting you with everyday living skills, finding employment or providing emotional support. We are here to help you!">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Support <span class="fs-serif-md ff-serif">Work</span></h2>
                <p class="fs-sm line-3">
                Our Support workers love helping individuals to live a more fulfilled and independent lifestyle, whether that be through companionship, improving social skills, supporting you with everyday living skills, finding employment or providing emotional support. We are here to help you!
                </p>
            </div>
        </div>

        <div id="service4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/mental-health-nurse.jpg" class="service-image" data-title="Mental Health <span class='ff-serif fs-serif-md'>Nurse</span>" data-description="We are committed to providing high quality care for the people we support. Our team of experienced mental health nurses are available to assist participants who require a higher level of clinical support, as well as in-depth clinical assessments if required.">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Mental Health <span class="fs-serif-md ff-serif">Nurse</span></h2>
                <p class="fs-sm line-3">
                We are committed to providing high quality care for the people we support. Our team of experienced mental health nurses are available to assist participants who require a higher level of clinical support, as well as in-depth clinical assessments if required. 
                </p>
            </div>
        </div>

        <div id="service5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/training.jpg" class="service-image" data-title="Training" data-description="Empower your team with our comprehensive mental health training programs. Our tailored courses are designed to equip individuals with the knowledge, skills, and sensitivity needed to navigate the complexities of mental health effectively. From understanding various disorders to learning practical strategies for intervention and support, our training ensures your staff are equipped to foster a supportive and inclusive environment. Invest in your team's well-being and enhance your organization's capacity to provide compassionate care with our expert-led mental health training">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Training</h2>
                <p class="fs-sm line-3">
                Empower your team with our comprehensive mental health training programs. Our tailored courses are designed to equip individuals with the knowledge, skills, and sensitivity needed to navigate the complexities of mental health effectively. From understanding various disorders to learning practical strategies for intervention and support, our training ensures your staff are equipped to foster a supportive and inclusive environment. Invest in your team's well-being and enhance your organization's capacity to provide compassionate care with our expert-led mental health training
                </p>
            </div>
        </div>

        <div id="service6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/services/community-hub.jpg" class="service-image" data-title="Our Community <span class='ff-serif fs-serif-md'>Hub</span>" data-description="At My Recovery 101, creating a sense of community and inclusion is at the heart of everything we do. If you are looking to build new skills and make friends, look no further! At Our Community Hub, we provide a vibrant, safe and welcoming haven where individuals can come together to connect and grow. Through a dynamic array of activities such as cooking classes, art therapy, music sessions, mindfulness practices, dance workshops, gardening, movie days and more, we offer a diverse opportunity for social connection and skill development. Our fun-filled outings further enrich the experience, creating lasting memories and friendships for life.  " data-link="<?= home_url('/community-hub/') ?>">
            <div class="service-info hide-2xl text-center mt-16">
                <h2 class="fs-3xl">Our Community <span class="fs-serif-md ff-serif">Hub</span></h2>
                <p class="fs-sm line-3">
                At My Recovery 101, creating a sense of community and inclusion is at the heart of everything we do. If you are looking to build new skills and make friends, look no further! At Our Community Hub, we provide a vibrant, safe and welcoming haven where individuals can come together to connect and grow. Through a dynamic array of activities such as cooking classes, art therapy, music sessions, mindfulness practices, dance workshops, gardening, movie days and more, we offer a diverse opportunity for social connection and skill development. Our fun-filled outings further enrich the experience, creating lasting memories and friendships for life.  
                </p>
                <a href="<?= home_url('/community/') ?>" class="button circle uppercase fw-semibold mt-24"><span>LEARN MORE</span></a>
            </div>
        </div>
       
    </div>

    <div id="service-details" class="col-8 m-auto mt-24">
        <h2 id="service-title" class="fs-3xl text-center"></h2>
        <p id="service-description" class="fs-sm line-3 text-center"></p>
        <a href="#" id="link-service-details"></a>
    </div>
</section>
<section class="services-home mt-120">
        <div class="container">
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
                                My Recovery 101 has lead me through a dark side that I thought was never ending and helped me realise the potential of my illness. They never gave up on me and always had me there, ready to go ahead and forward. They blessed me with things I could only dream about. So if you’re asking for this and any help, I can kindly recommend My Recovery 101.
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">A.L</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                My recovery 101 has helped me to achieve greater wellbeing and functioning in my day-to- day activities by helping me with my goals and by engaging me in the community.

                                Through my support workers I’ve been able to take part in activities like workshops at the community hub, establishing stronger social interactions and connections with my surfing at Cronulla.

                                Also enhancing my employment prospects by equipping me with skills such as conducting mock job interviews, preparing a resume, and working on strengths and weaknesses.

                                My recovery 101 helped me find a job at the men’s shed for a few weeks.

                                The ongoing support of 2 days a week has helped me to achieve progress.

                                I appreciate all the help my recovery 101 has given me and look forward to maintaining my relationship with them into the future.

                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">A.S</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                I cannot put into words how i much i appreciate my recovery 101. They have helped me organise my life and have been so helpful pointing me in the right direction about how i should use my ndis funding. The staff are really friendly and full of knowledge... would highly recommend!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">C.E.V</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                Laura has supported me for over 4 years and I have grown to admire her empathy, kindness and determination to find help and support that meets my every need. Now that she has her own company I can see Laura has been diligent in hiring coordinators and support workers who share her ethos of care and kindness. I must mention Cecilia, my coordinator, who has been tireless in understanding my needs as a sufferer of CPTSD and helping get the right support. I’m looking forward to viewing the new website, I just know it’s going to be a great source of encouragement!!!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">J.I</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                I’m so grateful to Laura for truly changing my life. She found me when I was broken and thought life was not worth living but with her help and all the people she found to be my support network my life has turned around to a point of being more productive and satisfying. I have been with Laura 5 glorious years. She helped me fight some huge battles. Always positive and actively searching for different activities or treatments to help me better cope with my anxiety, mental health and physical disabilities. The team at 101 are my warriors.
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">M.P</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                It’s great to have someone qualified in mental health to meet up with on a weekly basis not only do I get priceless advice and help with appointments. I also get someone who understands mental health issues and treatments. I’ve found having Nicky very beneficial In my day to day life and all over well being!
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">N.M</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                My Recovery 101 have been amazingly helpful, very understanding and caring towards my needs. The team are lovely and I have been very impressed with the service I have received.
                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">R.E</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                I can not recommend "My recovery 101." Enough for those of us on NDIS.

                                Laura ( who I believe owns the company)is mainly known to me for the support she gave a young adult. Giving her all the time in the world and getting to know her. Preparing her for interviews one in particular. Driving her to the appointment with last minute advice and hints. Waited for her and took her home. This was even though Laura's car had broken down and she was pregnant, she didn't let this stop her. She managed to get a friend to help her so she was there for her participant. This girl got the job and hasn't looked back.

                                I'm personally under Adri from 101. She is a hero to me. Adri doesn't just listen she hears you. She goes above and beyond to help in every way. I personally haven't come across anyone like Adri. An example. I needed her for a hospital appointment that ran approximately 4 hours late. I know this affected so many plans but not once did she make me feel like a burden. She follows up everything she says she will. Adri explains everything. She's one in a million.

                                The main thing I'd like to say with both these girls is, if something has gone wrong, they don't dismiss you, they don't blame you not do they gaslight you. They are empathetic and practical. They fix it. You are a person not just a number!

                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">T.M</p>
                        </div>

                        <div>
                            <blockquote class="fs-md">
                                My experience with recovery 101 has honestly been life changing for me. I feel as if I am being heard/ understood and valued. My life has changed dramatically since my beginning, especially with my coordinator Adri who had been so lovely and empowering, pushing me forward to achieve things I never thought I could.

                                Over all I am unimaginable grateful for the support I’ve gotten. I’ve set goals that are carrying on in the future and have a healthy foundation which recovery 101 has set out for me. I feel very privileged and hopefully moving forwards in my life, as my goals and aspirations change I’m sure the support I have received will be an ongoing asset towards my life’s potential.


                            </blockquote>
                            <p class="underline-lavender fw-semibold fs-md mt-16">F.H</p>
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
<?php get_footer() ?>