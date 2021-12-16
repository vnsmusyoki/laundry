<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Klear - Cleaning Service Company HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{  asset('front-end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/odometer.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/slick.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/default.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{  asset('front-end/css/responsive.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- header -->
    <header class="header-area header-md-p">
        <div class="header-top sh-top-b d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-cta s-hcta display-ib">
                            <span><i class="fal fa-phone"></i> +254-799-329-875</span>
                        </div>
                        <div class="header-social third-header-social display-ib">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="header-top-cta s-hcta display-ib">
                            <span><i class="fal fa-envelope-open"></i> mercyproject@gmail.com</span>
                        </div>
                        <div class="header-top-btn display-ib">
                            <a href="{{ url('booking-service') }}" class="btn">Let’s talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area third-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/')}}"><img src="{{  asset('front-end/img/logo/logo.png') }}" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu s-main-menu t-main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="{{ url('/') }}">Home</a>  </li>
                                    <li><a href="{{  url('about-us') }}">About</a></li>
                                    <li><a href="{{  url('services') }}">Services</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('services/plumbing-services') }}">Plumbing Services</a></li>
                                            <li><a href="{{  url('services/cleaning-services') }}">Cleaning Services</a></li>
                                            <li><a href="{{ url('services/car-washing') }}">Car Washing</a></li>
                                            <li><a href="{{ url('services/house-cleaning') }}">House Cleaning</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                    <li><a href="{{ route('login') }}">My Account</a></li>
                                    <li><a href="{{ url('booking-service') }}">Book Us Today</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 d-none d-lg-block">
                        <div class="sidebar-menu-btn green-sidebar-menu d-none d-lg-block">
                            <a href="#" class="menu-tigger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                        </div>
                        <div class="offcanvas-menu">
                            <span class="menu-close"><i class="fas fa-times"></i></span>
                            <form action="#">
                                <input type="text" placeholder="Search..">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('services/house-cleaning') }}">Services</a></li>
                                <li><a href="{{ url('booking-service') }}">Booking Service</a></li>
                                <li><a href="{{ route('login') }}">My Account</a></li>
                                <li><a href="{{  url('contact-us') }}">Contact</a></li>
                            </ul>
                            <div class="side-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="sidebar-insta">
                                <ul>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img01.jpg') }}" alt="img"></a></li>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img02.jpg') }}" alt="img"></a></li>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img03.jpg') }}" alt="img"></a></li>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img04.jpg') }}" alt="img"></a></li>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img05.jpg') }}" alt="img"></a></li>
                                    <li><a href="#"><img src="{{  asset('front-end/img/instagram/insta_img06.jpg') }}" alt="img"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="offcanvas-overly"></div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>
   @yield('content')
    </main>
    <!-- main-area-end -->
    <!-- footer-area -->
    <footer class="footer-bg" data-background="{{ asset('front-end/img/bg/footer_bg03.jpg') }}">
        <div class="subscribe-area pt-120">
            <div class="container">
                <div class="subscribe-bg white-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="subscribe-content t-subscribe-content">
                                <span>Get More Update</span>
                                <h4>Subscribe Our Newsletters</h4>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form action="#" class="subscribe-form p-relative">
                                <input type="email" name="email" placeholder="Enter your email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top pt-80 pb-50">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget wf-widget mb-30">
                            <div class="logo mb-20">
                                <a href="index.html"><img src="{{ asset('front-end/img/logo/w_footer_logo.png') }}" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor ame consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <span>support@sheen.com</span>
                                <span>+821 123 456 88</span>
                            </div>
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6">
                        <div class="footer-widget wf-widget mb-30">
                            <div class="fw-title mb-20">
                                <h3>Quick Links</h3>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">Setting</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Latest Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget wf-widget mb-30">
                            <div class="fw-title mb-20">
                                <h3>What We Do</h3>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Corporate Headquarters</a></li>
                                    <li><a href="#">Schools, Educational</a></li>
                                    <li><a href="#">Medical & Healthcare</a></li>
                                    <li><a href="#">Industrial & Manufacturing</a></li>
                                    <li><a href="#">Owner Occupied Buildings</a></li>
                                    <li><a href="#">Car Dealerships</a></li>
                                    <li><a href="#">Government Buildings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget wf-widget mb-30">
                            <div class="fw-title mb-20">
                                <h3>Download Apps</h3>
                            </div>
                            <div class="f-download-wrap">
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do</p>
                                <div class="f-download-btn">
                                    <a href="#"><img src="{{ asset('front-end/img/icon/fd_btn01.png') }}" alt="img"></a>
                                    <a href="#"><img src="{{ asset('front-end/img/icon/fd_btn02.png') }}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom s-footer-bottom">
            <div class="container">
                <div class="copyright-wrap pt-20 pb-20">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-b-link w-fb-link text-center">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Latest Blog</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text wc-text text-center">
                                <p>Copyright 2019 <span>BDevs</span>. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS here -->
    <script src="{{  asset('front-end/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{  asset('front-end/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{  asset('front-end/js/popper.min.js') }}"></script>
    <script src="{{  asset('front-end/js/bootstrap.min.js') }}"></script>
    <script src="{{  asset('front-end/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{  asset('front-end/js/slick.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{  asset('front-end/js/ajax-form.js') }}"></script>
    <script src="{{  asset('front-end/js/wow.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{  asset('front-end/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.counterup.min.js') }}"></script>
    <script src="{{  asset('front-end/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{  asset('front-end/js/plugins.js') }}"></script>
    <script src="{{  asset('front-end/js/main.js') }}"></script>
</body>

</html>
