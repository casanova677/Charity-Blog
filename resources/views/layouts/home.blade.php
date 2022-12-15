<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 8</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">

    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header" class="tp-site-header tp-header-style-2">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-7 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-call"></i>+1 (205) 315‑9713</li>
                                    <li><i class="fi flaticon-envelope"></i>support@rcicu.org</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-5 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a class="theme-btn" href="/donate">Donate Now</a></li>
                                    <li><a class="theme-btn" href="/donate">Volunteer Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img class="navbar-brand" height="20%" width="20%" src="assets/images/logo.png" alt="blog">
                   
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="/">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/about">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/causes">Causes</a>
                            </li>
                           
                            <li><a href="/event">Event</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Get Involved</a>
                                <ul class="sub-menu">
                                    <li><a href="/donate">Donate</a></li>
                                    <li><a href="/volunteer">Volunteer</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="/blog">Blog</a>
                               
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

        <main>
            @yield('content')
        </main>
        <div class="tp-ne-footer">
            <!-- start tp-site-footer -->
            <footer class="tp-site-footer">
                <div class="tp-upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget about-widget">
                                    <div class="logo widget-title">
                                        <img class="ft-logo-1" src="assets/images/logo.png" alt="blog">
                                    </div>
                                    <p>RCICU is the world’s largest humanitarian network and is guided by seven Fundamental Principles: humanity, impartiality, neutrality, independence, voluntary service, universality and unity. </p>
                                    <ul>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-facebook"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-twitter-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="parallax-wrap">
                                                <div class="parallax-element">
                                                    <a href="#">
                                                        <i class="ti-google"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6">
                                <div class="widget link-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <ul>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/causes">Our Causes</a></li>
                                        <li><a href="/donate">Donate</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                        <li><a href="/event">Our Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                                <div class="widget market-widget tp-service-link-widget">
                                    <div class="widget-title">
                                        <h3>Contact </h3>
                                    </div>
                                   
                                    <div class="contact-ft">
                                        <ul>
                                            <li><i class="fi flaticon-pin"></i>National Headquarters 2025 E Street, NW United States</li>
                                            <li><i class="fi flaticon-call"></i>+1 (205) 315‑9713</li>
                                            <li><i class="fi flaticon-envelope"></i>support@rcicu.org</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget instagram">
                                    <div class="widget-title">
                                        <h3>Instagram</h3>
                                    </div>
                                    <ul class="d-flex">
                                        <li><a href="#"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </div>
                <div class="tp-lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <p class="copyright">&copy; 2021 RCICU. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end tp-site-footer -->
        </div>

        <!-- theme-change-btn -->
        <div class="theme-change-btn">
            <button id="change-theme-btn">
                <span class="cng-btn-1">Light <i class="ti-palette"></i></span>
                <span class="cng-btn-2">Dark <i class="ti-palette"></i></span>
            </button>
        </div>

        <div id="magic-cursor">
            <div id="ball">
                <div id="ball-drag-x"></div>
                <div id="ball-drag-y"></div>
                <div id="ball-loader"></div>
            </div>
        </div>
    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


</html>
