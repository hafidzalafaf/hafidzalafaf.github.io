<!doctype html>
<html lang="en">

<!-- Head  -->
<?php $this->load->view('_partials/head.php') ?>
<!-- End Head -->

<body>

    <!-- Navbar -->
    <section id="navbar" class="bg-white">
        <div class="container">
            <div class="navbar-group">
                <div class="left">
                    <a href="<?= base_url('home') ?>" style="text-decoration: none;"><img src="<?= base_url('assets/images/logo3.svg') ?>" alt="Logo Keitoto"></a>
                </div>
                <div class="right">
                    <div class="navbar-link">
                        <a href="<?= base_url('home/caseStudy') ?>">Case study</a>
                        <a href="">Work</a>
                        <a href="">Services</a>
                        <a href="">Product <span>SOON</span></a>
                        <a href="<?= base_url('home/inquiry') ?>" class="lets-contact">Let’s connect <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.21484 2.96484L10.2498 5.99984L7.21484 9.03484" stroke="#262626" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                                <path d="M2 6H9" stroke="#262626" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="square" />
                            </svg>
                        </a>
                    </div>
                    <div class="navbar-mobile" id="mobile-menu">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.05 11H3.95C3.42533 11 3 11.4253 3 11.95V12.05C3 12.5747 3.42533 13 3.95 13H20.05C20.5747 13 21 12.5747 21 12.05V11.95C21 11.4253 20.5747 11 20.05 11Z" fill="#262626" />
                            <path d="M20.05 16H3.95C3.42533 16 3 16.4253 3 16.95V17.05C3 17.5747 3.42533 18 3.95 18H20.05C20.5747 18 21 17.5747 21 17.05V16.95C21 16.4253 20.5747 16 20.05 16Z" fill="#262626" />
                            <path d="M20.05 6H3.95C3.42533 6 3 6.42533 3 6.95V7.05C3 7.57467 3.42533 8 3.95 8H20.05C20.5747 8 21 7.57467 21 7.05V6.95C21 6.42533 20.5747 6 20.05 6Z" fill="#262626" />
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
            <!-- header  -->
            <section id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>invoiceku</h6>
                            <h4>all-in-one invoicing platform website</h4>
                        </div>
                        <div class="col-lg-4 right">
                            <p>As long as your dreams revolve around something like being the
                                As long as your dreams revolve around something like being the
                                As long as your dreams revolve around something like being the proud owner. As long as your dreams revolve around</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end header  -->

            <!-- invoiceku -->
            <section id="invoiceku">
                <div class="container container-case">
                    <div class="invoiceku-one">
                        <div class="rows">
                            <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard1.png') ?>" alt="paul-howard-preview">
                        </div>
                    </div>
                    <div class="invoiceku-two">
                        <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard2.png') ?>" alt="paul-howard-desktop">
                        <img class="right" src="<?= base_url('assets/images/show-case/paul-howard/paul-howard3.png') ?>" alt="paul-howard-mobile">
                    </div>
                    <div class="invoiceku-three paul-howard bg-dark">
                        <div class="rows">
                            <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard4.png') ?>" alt="paul-howard-highlight1">
                        </div>
                    </div>
                    <div class="invoiceku-four paul-howard  bg-green-light">
                        <div class="rows">
                            <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard5.png') ?>" alt="paul-howard-highlight4">
                        </div>
                    </div>
                    <div class="invoiceku-five">
                        <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard6.png') ?>" alt="paul-howard-fullpage">
                    </div>
                    <div class="invoiceku-six bg-green-light">
                        <div class="rows">
                            <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard7.png') ?>" alt="paul-howard-group4">
                            <img class="right" src="<?= base_url('assets/images/show-case/paul-howard/paul-howard8.png') ?>" alt="paul-howard-group5">
                            <img class="right" src="<?= base_url('assets/images/show-case/paul-howard/paul-howard9.png') ?>" alt="paul-howard-group6">
                        </div>
                        <div class="rows center end">
                            <img src="<?= base_url('assets/images/show-case/paul-howard/paul-howard10.png') ?>" alt="paul-howard-group4">
                            <img class="right" src="<?= base_url('assets/images/show-case/paul-howard/paul-howard11.png') ?>" alt="paul-howard-group5">
                        </div>
                    </div>
                </div>
            </section>
            <!-- end invoiceku -->

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