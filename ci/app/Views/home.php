    <!-- Hero Start -->
    <section class="bg-home zoom-image d-flex align-items-center">
        <div class="bg-overlay image-wrap" id="hero-images" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(&quot;images/business/bg02.jpg&quot;); transition: all 500ms ease-in 0s;"></div>
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h4 class="display-5 text-white title-dark mb-4">Join the GIANTS</h4>
                        <p class="para-desc text-white mb-0 mx-auto" style="font-size:26px;">Welcome to Pride of Faith Academy, where excellence meets character. <br> At PFA, we are walking tall...</p>
                        <div class="mt-4 pt-2">
                            <a href="<?=base_url('admission')?>" class="btn btn-primary">Enroll now for a brighter future!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="home-shape-arrow">
            <a href="#contact"><i class="uil uil-phone arrow-icon text-dark h5 shadow-md"></i></a>
        </div>
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Start -->
    <section class="section bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-image position-relative">
                        <img src="img/bg7.jpg" class="img-fluid rounded shadow mb-2" alt="">

                        <img src="img/bg6.jpg" class="d-none d-md-block img-fluid rounded shadow" alt="">
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h6 class="text-primary fw-normal">You are welcome</h6>
                        <h4 class="title mb-4">Principal's Message</h4>
                        <h6 class="lead">Dear Esteemed Parents, Prospective Students, and Visitors,</h6>
                        <p>Assalamu Alaikum Warahmatullahi Wa Barakatuh.</p>
                        <p>It is with great pleasure that I extend a warm welcome to all of you to Pride of Faith Academy. As the Principal of this esteemed institution, I am honored to have the opportunity to introduce you to our school and our newly designed website.</p>
                        <p>At Pride of Faith Academy, we strive to provide a nurturing environment where students can grow academically, socially, and emotionally. Our dedicated faculty and staff work tirelessly to ensure that each student receives a high-quality education and is prepared for success in their future endeavors.</p>
                        <p>Our website is designed to provide you with a comprehensive overview of our school, including information about our academic programs, admission process, and extracurricular activities. Please take some time to explore the various sections of our website:</p>
                        <ul>
                            <li>The <a href="">About section</a> provides an overview of our school, including our mission, vision, and values.</li>
                            <li>The <a href="">Admission section</a> provides information about our admission process, including eligibility requirements, application deadlines, and tuition fees.</li>
                            <li>The <a href="">News and Events</a> section provides updates on school news, events, and activities, including information about upcoming events and extracurricular activities.</li>
                        </ul>
                        <p>We believe that a strong partnership between the school, parents, and the community is essential to the success of our students. We encourage you to explore our website and learn more about what Pride of Faith Academy has to offer.</p>
                        <p>Thank you for considering Pride of Faith Academy as a potential educational home for your child. We look forward to welcoming you into our school community.</p>
                        <p>Sincerely, <br>
                            Oduntan L.A <br>
                        Principal, Pride of Faith Academy</p>
                        <div class="mt-4 pt-2">
                            <a href="<?=base_url('admission')?>" class="btn btn-primary">Secure your place at our school <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-2 fw-bold title-dark mt-2 opacity-1"><span class="counter-value" data-target="182">182</span></h2>
                        <span class="counter-head fw-normal title-dark position-absolute top-50 start-0 end-0">Students</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->
                <div class="col-md-4 col-6">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-2 fw-bold title-dark mt-2 opacity-1"><span class="counter-value" data-target="8">8</span></h2>
                        <span class="counter-head fw-normal title-dark position-absolute top-50 start-0 end-0">Years of Experience</span>
                    </div>
                    <!--end counter box-->
                </div>
                <!--end col-->
                <div class="col-md-4 col-12 text-center">
                    <div class="counter-box position-relative text-center">
                        <h2 class="mb-0 display-2 fw-bold title-dark mt-2 opacity-1"><span class="counter-value" data-target="20">20</span></h2>
                        <span class="counter-head fw-normal title-dark position-absolute top-50 start-0 end-0">Staff</span>
                    </div>
                    <!--end counter box-->
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end section-->
    <script src="<?=base_url('js/easy_background.js')?> "></script>
    <script>
    easy_background("#hero-images", {
        slide: ["img/bg1.jpg", "img/bg4.jpg", "img/bg5.jpg"],
        delay: [5000, 5000, 5000]
    });
    </script>