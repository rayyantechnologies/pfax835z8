<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pride of Faith Academy, Sagamu || Welcome</title>
    <meta name="description" content="Pride of faith Academy is a secondary school established in Sagamu ...">
    <meta name="keywords" content="">
    <!-- favicon -->
    <link href="<?=base_url('img/favicon.png')?>" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('css/bootstrap.min.css')?>" type="text/css" rel="stylesheet">
    <!-- Slider -->
    <link href="<?=base_url('css/tiny-slider.css')?>" rel="stylesheet">
    <!-- Tobii -->
    <link href="<?=base_url('css/tobii.min.css')?>" rel="stylesheet" type="text/css">
    <!--Material Icon -->
    <!-- <link href="<?=base_url('css/materialdesignicons.min.css')?>" rel="stylesheet" type="text/css"> -->
    <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
    <!-- Custom  Css -->
    <link href="<?=base_url('css/style.min.css')?>" rel="stylesheet" type="text/css">
    <style></style>
    <style type="text/css" id="#jarallax-clip-0">
    #jarallax-container-0 {
        clip: rect(0 320px 418px 0);
        clip: rect(0, 320px, 418px, 0);
    }
    </style>
</head>

<body>
    <!-- TAGLINE END-->
    <!-- Navbar STart -->
    <!-- tagline-height Extra CSS for Above TAgline-->
    <header id="topnav" class="defaultscroll sticky nav-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="<?=base_url('/')?>">
                <span class="logo-light-mode">
                    <!-- <img src="img/logo.png" width="45px" class="l-dark" alt="">&nbsp; -->
                    <!-- <img src="img/logo.png"  width="45px" class="l-light" alt=""> -->
                </span>
                <img src="<?=base_url('img/logo.png')?>" class="logo-light-mode" width="45px" alt="PFA logo">
                <small class="text-dark">PFA</small>
            </a>
            <!-- Logo End -->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item ps-1 mb-0">
                    <a href="#!" target="_blank">
                        <div class="btn btn-icon btn-pills btn-primary d-sm-none d-inline-flex"><i class="uil uil-signin"></i></div>
                        <div class="btn btn-pills btn-primary d-none d-sm-block"><i class="uil uil-signin"></i> E-Portal</div>
                    </a>
                </li>
            </ul>
            <!--Login button End-->
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right nav-light">
                    <li><a href="<?=base_url('/')?>" class="sub-menu-item">Home</a></li>
                    <li><a href="<?=base_url('about')?>" class="sub-menu-item">About Us</a></li>
                    <li><a href="<?=base_url('admission')?>" class="sub-menu-item">Admission</a></li>
                    <!-- <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li class="megamenu-head">Classic Portfolio</li>
                                    <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Modern Portfolio</li>
                                    <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Grid Portfolio</li>
                                    <li><a href="portfolio-grid-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-grid-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-grid-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-grid-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-grid-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Masonry Portfolio</li>
                                    <li><a href="portfolio-classic-masonry.html" class="sub-menu-item">Classic Masonry</a></li>
                                    <li><a href="portfolio-modern-masonry.html" class="sub-menu-item">Modern Masonry</a></li>
                                    <li><a href="portfolio-grid-masonry.html" class="sub-menu-item">Grid Masonry</a></li>
                                    <li><a href="portfolio-project-masonry.html" class="sub-menu-item">Project masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Portfolio Detail</li>
                                    <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                    <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                    <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li><a href="<?=base_url('blog')?>" class="sub-menu-item">News & Events</a></li>
                    <li><a href="<?=$_ENV['alumniPage']?>" class="sub-menu-item">Alumni</a></li>
                    <li><a href="#contact" class="sub-menu-item">Contact</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->