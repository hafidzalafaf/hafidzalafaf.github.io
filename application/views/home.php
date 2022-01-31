<!doctype html>
<html lang="en">

<!-- Head  -->
<?php $this->load->view('_partials/head.php') ?>
<!-- End Head -->

<body>


    <!-- Navbar -->
    <section id="navbar" class="bg-blue">
        <div class="container">
            <div class="navbar-group">
                <div class="left">
                    <a href="<?= base_url('home') ?>" style="text-decoration: none;"><img src="<?= base_url('assets/images/logo.svg') ?>" alt="Logo Keitoto"></a>
                </div>
                <div class="right">
                    <div class="navbar-link">
                        <a href="<?= base_url('home/caseStudy') ?>">Case study</a>
                        <a href="">Work</a>
                        <a href="">Services</a>
                        <a href="">Product <span>SOON</span></a>
                        <a href="<?= base_url('home/inquiry') ?>" class="lets-contact">Let’s connect <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.21484 2.96484L10.2498 5.99984L7.21484 9.03484" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                                <path d="M2 6H9" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                            </svg>
                        </a>
                    </div>
                    <div class="navbar-mobile" id="mobile-menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.05 11H3.95C3.42533 11 3 11.4253 3 11.95V12.05C3 12.5747 3.42533 13 3.95 13H20.05C20.5747 13 21 12.5747 21 12.05V11.95C21 11.4253 20.5747 11 20.05 11Z" fill="white" />
                            <path d="M20.05 16H3.95C3.42533 16 3 16.4253 3 16.95V17.05C3 17.5747 3.42533 18 3.95 18H20.05C20.5747 18 21 17.5747 21 17.05V16.95C21 16.4253 20.5747 16 20.05 16Z" fill="white" />
                            <path d="M20.05 6H3.95C3.42533 6 3 6.42533 3 6.95V7.05C3 7.57467 3.42533 8 3.95 8H20.05C20.5747 8 21 7.57467 21 7.05V6.95C21 6.42533 20.5747 6 20.05 6Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navbar -->

    <!-- Navbar Mobile -->
    <section id="navbar-mobile">
        <div class="container">
            <div class="content">
                <div class="top">
                    <a href="<?= base_url('home') ?>">
                        <img class="logo" src="<?= base_url('assets/images/logo.svg') ?>" alt="logo keitoto">
                    </a>
                    <i id="close-btn" class="fas fa-times"></i>
                </div>
                <div class="link">
                    <a href="<?= base_url('home/casestudy') ?>">case study</a>
                    <a href="">work</a>
                    <a href="">services</a>
                    <a href="" class="product">product <span>soon</span></a>
                    <a href="<?= base_url('home/inquiry') ?>" class="button-nav">Let's connect <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.21484 2.96484L10.2498 5.99984L7.21484 9.03484" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                            <path d="M2 6H9" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end Navbar Mobile -->


    <section class="viewport">
        <div id="scroll-container">
            <!-- jumobtron -->
            <section id="jumbotron">
                <div class="container">
                    <h6>we focus on building</h6>
                    <div class="heading">
                        <h1>amazing digital</h1>
                        <h1 class="two">✦ products with</h1>
                        <h1 class="three">creative design</h1>
                        <a href="<?= base_url('home/inquiry') ?>"><img src="<?= base_url('assets/images/arrow-blue.svg') ?>" alt=""><span>Let’s connect</span></a>
                    </div>
                    <h6 class="bottom"> Branding, UI/UX, Illustration, Motion, Development</h6>
                    <div class="bottom-content">
                        <div class="left">
                            <img src="<?= base_url('assets/images/mouse.svg') ?>" alt="scroll-down">
                            <p>Scroll down for more</p>
                        </div>
                        <div class="right">
                            <a href=""><img src="<?= base_url('assets/images/social-blue1.svg') ?>" alt="keitoto-dribbble"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue2.svg') ?>" alt="keitoto-behance"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue3.svg') ?>" alt="keitoto-instagram"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue4.svg') ?>" alt="keitoto-linkedin"></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- jumobtron -->

            <!-- about -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 left">
                            <h6>about us</h6>
                            <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M72.2832 57.7197L48.0032 81.9997L23.7232 57.7197" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="square" />
                                <path d="M48 16L48 80" stroke="white" stroke-width="6" stroke-miterlimit="10" stroke-linecap="square" />
                            </svg>
                        </div>
                        <div class="col-md-9">
                            <p>We are creative people that work on a full design service like branding, mobile app, web-app, landing page, illustration, motion, and we’re also cover development projects.</p>
                            <p>We’re thriving to solve problems with a different way of thinking and love to have a discussion about how we can solve your problem and help your business.</p>
                            <p class="end">We always love to work with nice people on an amazing project and work with your team when building your product.</p>
                        </div>
                        <div class="col-12 arrow-bottom">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.1653 33.6699L28.0019 47.8332L13.8386 33.6699" stroke="white" stroke-width="3.5" stroke-miterlimit="10" stroke-linecap="square" />
                                <path d="M28 9.33337L28 46.6667" stroke="white" stroke-width="3.5" stroke-miterlimit="10" stroke-linecap="square" />
                            </svg>

                        </div>
                    </div>
                    <div class="line">

                    </div>
                </div>
            </section>
            <!-- end about -->

            <!-- process -->
            <section id="our-process">
                <div class="container">
                    <div class="row header">
                        <div class="col-lg-3">
                            <h6>Our process</h6>
                        </div>
                        <div class="col-lg-9">
                            <p>We are creative people that work on a full design service like branding, mobile app, web-app, landing page, illustration.</p>
                        </div>
                    </div>
                    <div class="row body">
                        <!-- one -->
                        <div class="col-lg-3 left">
                            <p>01.</p>
                        </div>
                        <div class="col-lg-9 right">
                            <h3>Discovery</h3>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                        <!-- two -->
                        <div class="col-lg-3 left">
                            <p>02.</p>
                        </div>
                        <div class="col-lg-9 right">
                            <h3>strategy</h3>
                            <p>Then start to plan and structure the project process and budget based on the discovery phase before start jumping on the design phase.</p>
                        </div>
                        <!-- three -->
                        <div class="col-lg-3 left">
                            <p>03.</p>
                        </div>
                        <div class="col-lg-9 right end">
                            <h3 class="end">design</h3>
                            <p>After we have completed all the process, goals and scope. We will start to do the design process such as creating user flow, wireframe, until finish.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-box">
                </div>
            </section>
            <!-- end process -->

            <!-- case study -->
            <section id="case-study">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>case study</h6>
                            <h4>the process of designing our website</h4>
                        </div>
                        <div class="col-lg-4 right">
                            <p>As long as your dreams revolve around something like being the proud owner. As long as your dreams revolve around</p>
                        </div>
                    </div>
                </div>
                <div class="images">
                    <img src="<?= base_url('assets/images/case-study.png') ?>" alt="">
                </div>
            </section>
            <!-- end case study -->

            <!-- our process two -->
            <section id="our-process2">
                <div class="container">
                    <div class="row one">
                        <div class="col-lg-3">
                            <h6>Our process</h6>
                        </div>
                        <div class="col-lg-9">
                            <p>We are creative people that work on a full design service like branding, mobile app, web-app, landing page, illustration.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 item">
                            <div class="images">
                                <img src="<?= base_url('assets/images/show-case/invoiceku.png') ?>" alt="invoiceku">
                                <div class="cover">
                                    <a href="<?= base_url('home/showcaseone') ?>"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.50391 5.06252L19.6281 5.06252L19.6281 16.1867" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                            <path d="M4.5625 20.127L18.5625 6.12697" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg> <span>See details</span>
                                    </a>
                                </div>
                            </div>
                            <h6>Doctor appointment app</h6>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                        <div class="col-lg-6 item">
                            <div class="images left">
                                <img class="hand" src="<?= base_url('assets/images/show-case/ngehe.png') ?>" alt="ngehe">
                                <div class="cover">
                                    <a href="<?= base_url('home/showcasetwo') ?>"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.50391 5.06252L19.6281 5.06252L19.6281 16.1867" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                            <path d="M4.5625 20.127L18.5625 6.12697" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg> <span>See details</span>
                                    </a>
                                </div>
                            </div>
                            <h6>web-app online publishing</h6>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 item">
                            <div class="images left">
                                <img class="hand" src="<?= base_url('assets/images/show-case/travel.png') ?>" alt="travel">
                                <div class="cover">
                                    <a href="<?= base_url('home/showcasethree') ?>"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.50391 5.06252L19.6281 5.06252L19.6281 16.1867" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                            <path d="M4.5625 20.127L18.5625 6.12697" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg> <span>See details</span>
                                    </a>
                                </div>
                            </div>
                            <h6>Doctor appointment app</h6>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                        <div class="col-lg-6 item">
                            <div class="images">
                                <img src="<?= base_url('assets/images/show-case/floattalk.png') ?>" alt="floattalk">
                                <div class="cover">
                                    <a href="<?= base_url('home/showcasefour') ?>"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.50391 5.06252L19.6281 5.06252L19.6281 16.1867" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                            <path d="M4.5625 20.127L18.5625 6.12697" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg> <span>See details</span>
                                    </a>
                                </div>
                            </div>
                            <h6>web-app online publishing</h6>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 item last">
                            <div class="images">
                                <img src="<?= base_url('assets/images/show-case/paulhoward.png') ?>" alt="paulhoward">
                                <div class="cover">
                                    <a href="<?= base_url('home/showcasefive') ?>"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.50391 5.06252L19.6281 5.06252L19.6281 16.1867" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                            <path d="M4.5625 20.127L18.5625 6.12697" stroke="#0E5AB8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg> <span>See details</span>
                                    </a>
                                </div>
                            </div>
                            <h6>Doctor appointment app</h6>
                            <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                        </div>
                        <div class="col-lg-6 item more-button">
                            <a href="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.50391 4.5625L19.6281 4.5625L19.6281 15.6867" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" />
                                    <path d="M4.5625 19.627L18.5625 5.62695" stroke="white" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" />
                                </svg>
                                <span>See more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end our process two -->

            <!-- services -->
            <section id="services">
                <div class="top-box">

                </div>
                <div class="container">
                    <div class="header">
                        <h6>Our SERVICE</h6>
                        <h4>see what we can do for you</h4>
                    </div>
                    <div class="content">
                        <div class="d-flex align-items-start row justify-content-between">
                            <div class="nav flex-column nav-pills me-3 col-md-5 col-lg-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-branding-tab" data-bs-toggle="pill" data-bs-target="#v-pills-branding" type="button" role="tab" aria-controls="v-pills-branding" aria-selected="true"><span>01.</span> / Branding Design</button>
                                <button class="nav-link" id="v-pills-uiuix-tab" data-bs-toggle="pill" data-bs-target="#v-pills-uiuix" type="button" role="tab" aria-controls="v-pills-uiuix" aria-selected="false"><span>02.</span> / UI UX Design</button>
                                <button class="nav-link" id="v-pills-ilustration-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ilustration" type="button" role="tab" aria-controls="v-pills-ilustration" aria-selected="false"><span>03.</span> / Ilustration Design</button>
                                <button class="nav-link" id="v-pills-ghrapic-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ghrapic" type="button" role="tab" aria-controls="v-pills-ghrapic" aria-selected="false"><span>04.</span> / Graphic Design</button>
                                <button class="nav-link" id="v-pills-motion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-motion" type="button" role="tab" aria-controls="v-pills-motion" aria-selected="false"><span>05.</span> / Motion Design</button>
                                <button class="nav-link" id="v-pills-development-tab" data-bs-toggle="pill" data-bs-target="#v-pills-development" type="button" role="tab" aria-controls="v-pills-development" aria-selected="false"><span>06.</span> / Development Design</button>
                            </div>
                            <div class="tab-content col-md-6 col-lg-7" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-branding" role="tabpanel" aria-labelledby="v-pills-branding-tab">
                                    <div class="header">
                                        <h5>branding design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Visual Identity</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Collateral</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box left">
                                            <h6>Brand Assets</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Guidelines</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-uiuix" role="tabpanel" aria-labelledby="v-pills-uiuix-tab">
                                    <div class="header">
                                        <h5>UI UX design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Mobile-app</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Website</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-ilustration" role="tabpanel" aria-labelledby="v-pills-ilustration-tab">
                                    <div class="header">
                                        <h5>Ilustration design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Mobile-app</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Website</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-ghrapic" role="tabpanel" aria-labelledby="v-pills-ghrapic-tab">
                                    <div class="header">
                                        <h5>Graphic design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Mobile-app</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Website</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-motion" role="tabpanel" aria-labelledby="v-pills-motion-tab">
                                    <div class="header">
                                        <h5>Motion design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Visual Identity</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Collateral</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box left">
                                            <h6>Brand Assets</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Guidelines</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-development" role="tabpanel" aria-labelledby="v-pills-development-tab">
                                    <div class="header">
                                        <h5>Development design</h5>
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="box left">
                                            <h6>Visual Identity</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Collateral</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box left">
                                            <h6>Brand Assets</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                        <div class="box right">
                                            <h6>Branding Guidelines</h6>
                                            <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-mobile">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                        <span>01.</span> / Branding Design
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Branding Collateral</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Brand Assets</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>

                                            <div class="box">
                                                <h6>Branding Guidelines</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <span> 02.</span> / UI UX Design
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Mobile-app</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Website</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <span>03.</span> / Ilustration Design
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Mobile-app</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Website</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                                        <span>04.</span> / Graphic Design
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Mobile-app</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Website</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <span>05.</span> / Motion Design
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>

                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item end">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <span>06.</span> / Development
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>We start by learn and research based on client brief and resource to gain about the needs, goals, product and requirements.</p>
                                        <div class="boxes">
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>

                                            <div class="box">
                                                <h6>Visual Identity</h6>
                                                <p>How we shape perception and create an impression through the visible elements of the brand.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- our services -->

            <!-- cta -->
            <section id="cta">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h6>dont know what to fill</h6>
                            <h2>interested in working</h2>
                            <h2>✦ together with us?</h2>
                            <h6>we’ll surely show you how we turn you idea into the amazing design</h6>
                        </div>
                        <div class="col-lg-3 right">
                            <a href="<?= base_url('home/inquiry') ?>"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.50391 4.5625L19.6281 4.5625L19.6281 15.6867" stroke="#0E5AB8" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" />
                                    <path d="M4.5625 19.627L18.5625 5.62695" stroke="#0E5AB8" stroke-width="3" stroke-miterlimit="10" stroke-linecap="square" />
                                </svg>
                                <span>Let's Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end cta -->

            <!-- Footer -->
            <footer id="footer" class="bg-blue">
                <div class="container">
                    <div class="left">
                        <img src="<?= base_url('assets/images/logo.svg') ?>" alt="keitoto-logo">
                        <p>2021 © All rights reserved.</p>
                    </div>
                    <div class="right">
                        <div class="social-media">
                            <a href=""><img src="<?= base_url('assets/images/social-blue1.svg') ?>" alt="keitoto-dribbble"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue2.svg') ?>" alt="keitoto-behance"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue3.svg') ?>" alt="keitoto-instagram"></a>
                            <a href=""><img src="<?= base_url('assets/images/social-blue4.svg') ?>" alt="keitoto-linkedin"></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </section>


    <!-- js  -->
    <?php $this->load->view('_partials/js.php') ?>
    <!-- End js -->

</body>

</html>