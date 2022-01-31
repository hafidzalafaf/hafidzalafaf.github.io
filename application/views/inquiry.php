<!doctype html>
<html lang="en">

<!-- Head  -->
<?php $this->load->view('_partials/head.php') ?>
<!-- End Head -->

<body>

    <!-- Navbar -->
    <section id="navbar" class="bg-black">
        <div class="container">
            <div class="navbar-group">
                <div class="left">
                    <a href="<?= base_url('home') ?>" style="text-decoration: none;"><img src="<?= base_url('assets/images/logo.svg') ?>" alt="Logo Keitoto"></a>
                </div>
                <div class="right">
                    <div class="navbar-link">
                        <a href="<?= base_url('home/casestudy') ?>">Case study</a>
                        <a href="">Work</a>
                        <a href="">Services</a>
                        <a href="">Product <span>SOON</span></a>
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
            <!-- Inquiry -->
            <section id="inquiry">
                <div class="container">
                    <div class="row one">
                        <div class="col-md-6">
                            <h6>let’s connect</h6>
                            <h4 class="mb-0">hello! we are ready to know your idea</h4>
                        </div>
                        <div class="col-md-6 right">
                            <p>We can start our discussion by reading your thoughts so we would be appreciate if you can fill the form below.</p>
                        </div>
                    </div>
                    <?= form_open_multipart('home/inquiry') ?>
                    <div class="row two">
                        <div class="col-md-6">
                            <div class="input-wrap name">
                                <label for="name">What's your name ?</label>
                                <input type="text" name="_name_" id="_name_" class="form-control" value="<?= set_value('_name_'); ?>" required>
                            </div>
                            <div class="input-wrap email">
                                <label for="email">What's your email ?</label>
                                <input type="text" name="_email_" id="_email_" class="form-control" value="<?= set_value('_email_'); ?>" required>
                            </div>
                            <div class="checkbox-wrap">
                                <p>Choose your needs </p>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="branding" name="_need_[]" class="hidden-input" value="branding" <?= set_checkbox("_need_[]", "branding"); ?>>
                                    <label for="branding">Branding</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="mobile-app-design" name="_need_[]" class="hidden-input" value="mobile-app-design" <?= set_checkbox("_need_[]", "mobile-app-design"); ?>>
                                    <label for="mobile-app-design">Mobile app design</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="web-app-design" name="_need_[]" class="hidden-input" value="web-app-design" <?= set_checkbox("_need_[]", "web-app-design"); ?>>
                                    <label for="web-app-design">Web app design</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="website-design" name="_need_[]" class="hidden-input" value="website-design" <?= set_checkbox("_need_[]", "website-design"); ?>>
                                    <label for="website-design">Website design</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="ilustration" name="_need_[]" class="hidden-input" value="ilustration" <?= set_checkbox("_need_[]", "ilustration"); ?>>
                                    <label for="ilustration">Ilustration</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="motion-design" name="_need_[]" class="hidden-input" value="motion-design" <?= set_checkbox("_need_[]", "motion-design"); ?>>
                                    <label for="motion-design">Motion design</label>
                                </div>
                                <div class="input-checkbox-wrap">
                                    <input type="checkbox" id="development" name="_need_[]" class="hidden-input" value="development" <?= set_checkbox("_need_[]", "development"); ?>>
                                    <label for="development">Development</label>
                                </div>
                            </div>
                            <div class="radio-wrap">
                                <p>Estimate your budget</p>
                                <div class="input-radio-wrap">
                                    <input type="radio" id="under-1k" name="_budget_" class="hidden-input" value="under-1k" <?= set_value('_budget_') == 'under-1k' ? 'checked' : ''; ?>>
                                    <label for="under-1k">Under $1K</label>
                                </div>
                                <div class="input-radio-wrap">
                                    <input type="radio" id="1k-5k" name="_budget_" class="hidden-input" value="1k-5k" <?= set_value('_budget_') == '1k-5k' ? 'checked' : ''; ?>>
                                    <label for="1k-5k">$1K - $5K</label>
                                </div>
                                <div class="input-radio-wrap">
                                    <input type="radio" id="5k-10k" name="_budget_" class="hidden-input" value="5k-10k" <?= set_value('_budget_') == '5k-10k' ? 'checked' : ''; ?>>
                                    <label for="5k-10k">$5K - $10K</label>
                                </div>
                                <div class="input-radio-wrap">
                                    <input type="radio" id="more-10k" name="_budget_" class="hidden-input" value="more-10k" <?= set_value('_budget_') == 'more-10k' ? 'checked' : ''; ?>>
                                    <label for="more-10k">More than $10K</label>
                                </div>
                            </div>
                            <div class="idea">
                                <label for="your-idea">Tell us about your idea</label>
                                <textarea name="_message_" id="your-idea" rows="4"></textarea>
                            </div>
                            <div class="file">
                                <div class="files">
                                    <ul></ul>
                                </div>
                                <label for="upload">
                                    <input type="file" id="upload" name="attachment[]" multiple>
                                    <div class="caption">
                                        <p>Add your attachment</p>
                                        <img src="<?= base_url('assets/images/button-file.svg') ?>" alt="">
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <button type="submit" class="submit-btn"><img src="<?= base_url('assets/images/arrow-submit.svg') ?>" alt="">Submit</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </section>
            <!-- End Inquiry -->

            <!-- Footer -->
            <footer id="footer">
                <div class="container">
                    <div class="left">
                        <img src="<?= base_url('assets/images/logo.svg') ?>" alt="keitoto-logo">
                        <p>2021 © All rights reserved.</p>
                    </div>
                    <div class="right">
                        <div class="social-media">
                            <a href=""><img src="<?= base_url('assets/images/social1.svg') ?>" alt="keitoto-dribbble"></a>
                            <a href=""><img src="<?= base_url('assets/images/social2.svg') ?>" alt="keitoto-behance"></a>
                            <a href=""><img src="<?= base_url('assets/images/social3.svg') ?>" alt="keitoto-instagram"></a>
                            <a href=""><img src="<?= base_url('assets/images/social4.svg') ?>" alt="keitoto-linkedin"></a>
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