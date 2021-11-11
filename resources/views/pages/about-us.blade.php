@extends('pages.layout')
@section('title', 'About Us')
@section('content')
    <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="{{ asset('front-end/img/breadcrumb_bg.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <h2>About Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- about-area -->
            <section class="inner-about-area about-md-p pt-115 pb-120">
                <div class="container-fluid container-p container-about-p">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="s-choose-img p-relative">
                                <img src="{{ asset('front-end/img/s_choose_img02.jpg') }}" alt="img" data-parallax='{"x" : 50}'>
                                <img src="{{ asset('front-end/img/s_choose_img01.jpg') }}" alt="img" class="sc-top-img d-none d-lg-block" data-parallax='{"y" : 50}'>
                                <img src="{{ asset('front-end/img/s_choose_img03.jpg') }}" alt="img" class="sc-middle-img d-none d-lg-block" data-parallax='{"y" : -50}'>
                                <img src="{{ asset('front-end/img/choose_shape.png') }}" alt="img" class="s-choose-shape d-none d-lg-block">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 inner-about-padding">
                            <div class="side-title mb-30">
                                <span class="title-line"></span>
                                <span>About Us</span>
                                {{-- <h2>Modern Maintenance Inc. Has Been Delivering Results for 40 Years</h2> --}}
                            </div>
                            <div class="inner-about-content fix">
                                <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eius
                                mod tempor incididunt ut labore et dolore magna aliqua. Ut eniminim veniam quis nostrud exercitation ullamco</span> laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. eaque ipsa quae ab</p>
                                <p>We must be ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</p>
                                <div class="about-ceo fix display-ib">
                                    <div class="ceo-img">
                                                <img src="{{ asset('front-end/img/ceo_img02.png') }}" alt="img">
                                    </div>
                                    <div class="ceo-info fix">
                                        <h5>David Hakson kali</h5>
                                        <p>CEO & Founder</p>
                                    </div>
                                </div>
                                <div class="ceo-signature">
                                            <img src="{{ asset('front-end/img/signature.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <!-- about-area -->
            <section class="inner-about-wrap iaw-padding pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="inner-single-about mb-80">
                                <div class="isa-icon">
                                    <i class="fal fa-flag-alt"></i>
                                </div>
                                <div class="isa-content">
                                    <h4>Our Mission</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="inner-single-about active mb-80">
                                <div class="isa-icon">
                                    <i class="fal fa-bow-arrow"></i>
                                </div>
                                <div class="isa-content">
                                    <h4>Our Vission</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="inner-single-about mb-80">
                                <div class="isa-icon">
                                    <i class="fal fa-atom-alt"></i>
                                </div>
                                <div class="isa-content">
                                    <h4>Our Strategy</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end --> 
          
            <!-- company-history -->
            <section class="company-history p-relative pt-115 pb-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="section-title text-center mb-60">
                                <span>Company History</span>
                                <h2>Somthing Know About Our Timeline</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-company-history company-history-align mb-30 text-center">
                                <h4>In 1995 <br> When We Start</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniauis nostrud</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-company-history mb-30 text-center">
                                <h4>In 1993 <br> When Join Team</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniauis nostrud</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-company-history company-history-align mb-30 text-center">
                                <h4>In 1995 <br> When We Start</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit seddo eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniauis nostrud</p>
                            </div>
                        </div>
                    </div>
                    <div class="company-history-line">
                        <img src="{{ asset('front-end/img/comapy_history_line.png') }}" alt="img">
                    </div>
                </div>
            </section>
            <!-- company-history-end -->
            <!-- testimonial-area -->
            <section class="inner-testimonial-area gray-bg pt-115 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-7 col-md-9">
                            <div class="section-title text-center mb-80">
                                <span>Our Testimonials</span>
                                <h2>What’s Our Client’s Say About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row inner-third-t-active">
                        <div class="col-xl-3">
                            <div class="t-single-testimonial">
                                <div class="t-client-info mb-30 fix">
                                    <div class="t-client-img">
                                        <img src="{{ asset('front-end/tt_img01.png') }}" alt="img">
                                    </div>
                                    <div class="t-client-name third-c-name fix">
                                        <h5>Zamiz Para</h5>
                                        <span>CEO &amp; Founder</span>
                                        <div class="t-client-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-testimonial-content">
                                    <p>Lorem ipsum dolor sit amconsectetur adipisicing elit sed do eiuincididunt ut labore et dolore
                                        magna aliqua. Uenim ad
                                        minim veniam quis noexercitation ullamco laboris nisi ut aliquip exea commodo.</p>
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="t-single-testimonial">
                                <div class="t-client-info mb-30 fix">
                                    <div class="t-client-img">
                                        <img src="{{ asset('front-end/tt_img02.png') }}" alt="img">
                                    </div>
                                    <div class="t-client-name third-c-name fix">
                                        <h5>Pardeshi Sine</h5>
                                        <span>Web Designer</span>
                                        <div class="t-client-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-testimonial-content">
                                    <p>Lorem ipsum dolor sit amconsectetur adipisicing elit sed do eiuincididunt ut labore et dolore
                                        magna aliqua. Uenim ad
                                        minim veniam quis noexercitation ullamco laboris nisi ut aliquip exea commodo.</p>
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="t-single-testimonial">
                                <div class="t-client-info mb-30 fix">
                                    <div class="t-client-img">
                                        <img src="{{ asset('front-end/tt_img03.png') }}" alt="img">
                                    </div>
                                    <div class="t-client-name third-c-name fix">
                                        <h5>Somalia Ane</h5>
                                        <span>CEO &amp; Founder</span>
                                        <div class="t-client-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-testimonial-content">
                                    <p>Lorem ipsum dolor sit amconsectetur adipisicing elit sed do eiuincididunt ut labore et dolore
                                        magna aliqua. Uenim ad
                                        minim veniam quis noexercitation ullamco laboris nisi ut aliquip exea commodo.</p>
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="t-single-testimonial">
                                <div class="t-client-info mb-30 fix">
                                    <div class="t-client-img">
                                        <img src="{{ asset('front-end/tt_img04.png') }}" alt="img">
                                    </div>
                                    <div class="t-client-name third-c-name fix">
                                        <h5>Frank Sokla</h5>
                                        <span>Web Developer</span>
                                        <div class="t-client-review">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-testimonial-content">
                                    <p>Lorem ipsum dolor sit amconsectetur adipisicing elit sed do eiuincididunt ut labore et dolore
                                        magna aliqua. Uenim ad
                                        minim veniam quis noexercitation ullamco laboris nisi ut aliquip exea commodo.</p>
                                    <i class="fal fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            <!-- subscribe-area -->
            <section class="subscribe-area pt-120">
                <div class="container">
                    <div class="subscribe-bg" data-background="{{ asset('front-end/img/subscribe_bg.jpg') }}">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="subscribe-content">
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
            </section>
            <!-- subscribe-area-end -->
            <!-- brand-area -->
            <div class="brand-area pb-120 pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="s-brand-active">
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img01.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img02.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img03.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img04.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img05.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img06.png') }}" alt="brand">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('front-end/img/brand_img03.png') }}" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
@endsection