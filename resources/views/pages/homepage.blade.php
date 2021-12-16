@extends('pages.layout')
@section('title', 'Homepage')
@section('content')
         <!-- slider-area -->
        <section class="slider-area p-relative">
            <div class="slider-active">
                <div class="single-slider t-slider-bg d-flex align-items-center" data-background="{{ asset('front-end/img/slider/slider_bg03.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="t-slider-content text-center p-relative">
                                    <h2 data-animation="fadeInUp" data-delay=".2s"><span>A Wide</span> Range Of Cleaning <span>Services</span></h2>
                                    <div class="t-slide-btn" data-animation="fadeInUp" data-delay=".6s">
                                        <a href="#" class="btn">Our Services</a>
                                    </div>
                                    <img src="{{ asset('front-end/img/slider/slider-per.png') }}" alt="img" class="slider-percentage">
                                </div>
                            </div>
                        </div>
                        <img src="{{  asset('front-end/img/slider/slider_img02.png') }}" alt="img" class="slider-round-bg rotateme">
                    </div>
                </div>
                <div class="single-slider t-slider-bg d-flex align-items-center" data-background="{{ asset('front-end/img/slider/slider_bg03.jpg') }}">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="t-slider-content text-center p-relative">
                                    <h2 data-animation="fadeInUp" data-delay=".2s"><span>A Wide</span> Range Of Cleaning <span>Services</span></h2>
                                    <div class="t-slide-btn" data-animation="fadeInUp" data-delay=".6s">
                                        <a href="#" class="btn">Our Services</a>
                                    </div>
                                    <img src="{{ asset('front-end/img/slider/slider-per.png') }}" alt="img" class="slider-percentage">
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('front-end/img/slider/slider_img02.png') }}" alt="img" class="slider-round-bg rotateme">
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->
        <!-- about-area -->
        <section class="about-area p-relative" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="s-about-p pt-115 t-about-p pb-120">
                            <div class="side-title mb-30">
                                <span class="title-line"></span>
                                <span>About Us</span>
                                <h2>Modern Maintenance Inc. Has Been Delivering Results for 40 Years</h2>
                            </div>
                            <div class="s-about-content">
                                <p>We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics.</p>
                                <p>Plus, we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We are passionate about changing the way you think about laundry!</p>
                                <a href="#" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-list-wrap p-relative fix">
                            <ul>
                                <li>
                                    <div class="al-icon">
                                        <img src="{{ asset('front-end/img/icon/al_icon01.png') }}" alt="icon">
                                    </div>
                                    <div class="al-content">
                                        <h4>Supper Quality Well Results</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="al-icon">
                                        <img src="{{ asset('front-end/img/icon/al_icon02.png') }}" alt="icon">
                                    </div>
                                    <div class="al-content">
                                        <h4>Professional & Trusted Staff</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="al-icon">
                                        <img src="{{ asset('front-end/img/icon/al_icon03.png') }}" alt="icon">
                                    </div>
                                    <div class="al-content">
                                        <h4>Committed To Success</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="al-icon">
                                        <img src="{{ asset('front-end/img/icon/al_icon04.png') }}" alt="icon">
                                    </div>
                                    <div class="al-content">
                                        <h4>100% Clients Satisfied</h4>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="al-parallax-text paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="vertical">what we do</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- brand-area -->
        <div class="brand-area pb-120 brand-p">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-brand-active">
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img01.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img02.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img03.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img04.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img05.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img06.png') }}" alt="brand">
                            </div>
                            <div class="single-brand">
                                <img src="{{ asset('front-end/img/brand/brand_img03.png') }}" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
        <!-- services-area -->
        <section class="services-area gray-bg pt-115 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-80">
                            <span>Our Services</span>
                            <h2>We Provide Many Services For Your Regular Life</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services01.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon01.png') }}" alt="img"> Plumbing Service</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services02.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon02.png') }}" alt="img"> Car Washing</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services03.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon03.png') }}" alt="img"> Kichen Services</h4>
                                <p>Lorem ipsum dolor sit consectetuadipisi cing elit sed do eiusmot empor</p>
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services04.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon04.png') }}" alt="img"> Carpet Cleaning</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services05.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon05.png') }}" alt="img"> House Cleaning</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="t-single-services text-center mb-60">
                            <div class="t-services-thumb p-relative">
                                <img src="{{ asset('front-end/img/services/t_services06.jpg') }}" alt="img">
                            </div>
                            <div class="t-services-content">
                                <h4><img src="{{ asset('front-end/img/icon/ts_icon06.png') }}" alt="img"> Window Cleaning</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- fact-area -->
        <section class="fact-area p-relative fact-area-p pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-80">
                            <span>Company Fact</span>
                            <h2>Together We'll Explore New Things</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="single-fact text-center mb-30">
                            <div class="fact-icon mb-40 p-relative green">
                                <img src="{{ asset('front-end/img/shape/counter_circle01.png') }}" class="rotateme" alt="img">
                                <i class="fal fa-location"></i>
                            </div>
                            <div class="fact-count">
                                <h2 class="count">20</h2>
                                <span>Project Complate</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="single-fact text-center mb-30">
                            <div class="fact-icon mb-40 p-relative yellow">
                                <img src="{{ asset('front-end/img/shape/counter_circle02.png') }}" class="rotateme" alt="img">
                                <i class="fal fa-heart"></i>
                            </div>
                            <div class="fact-count">
                                <h2 class="count">32</h2>
                                <span>Satisfied Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="single-fact text-center mb-30">
                            <div class="fact-icon mb-40 p-relative purpole">
                                <img src="{{ asset('front-end/img/shape/counter_circle03.png') }}" class="rotateme" alt="img">
                                <i class="fal fa-trophy"></i>
                            </div>
                            <div class="fact-count">
                                <h2 class="count">80</h2>
                                <span>Win Awards</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="single-fact text-center mb-30">
                            <div class="fact-icon mb-40 p-relative blue">
                                <img src="{{ asset('front-end/img/shape/counter_circle04.png') }}" class="rotateme" alt="img">
                                <i class="fal fa-shield-check"></i>
                            </div>
                            <div class="fact-count">
                                <h2 class="count">65</h2>
                                <span>Win Awards</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fact-shape rotateme"><img src="{{ asset('front-end/img/shape/s_about_shape01.png') }}" alt="img"></div>
        </section>
        <!-- fact-area-end -->
        <!-- choose-area -->
        <section class="choose-area choose-padding p-relative pb-120">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6 t-choose-p pr-70">
                        <div class="side-title mb-30">
                            <span class="title-line"></span>
                            <span>Why Choose Us</span>
                            <h2>Enjoy Your Time Off How We Work</h2>
                        </div>
                        <div class="s-choose-wrap">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris</p>
                            <div class="choose-list mt-40">
                                <ul>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Move Out Cleaning</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Regular & Monthly Cleaning</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Customer Focused Reviews</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="t-choose-img">
                            <img src="{{ asset('front-end/img/images/third_choose_img.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-choose-shape tc-shape-one"><img src="{{ asset('front-end/img/shape/choose_shape01.png') }}" alt="shape"></div>
            <div class="t-choose-shape tc-shape-two"><img src="{{ asset('front-end/img/shape/choose_shape02.png') }}" alt="shape"></div>
        </section>
        <!-- choose-area-end -->
        <!-- team-area -->
        <section class="team-area team-bg fix p-relative pt-115 pb-90" data-background="{{ asset('front-end/img/bg/team_bg03.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title white-t text-center mb-70">
                            <span>Team Member</span>
                            <h2>Meet Our Exclusive Team Member</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-team fix mb-30 p-relative">
                            <div class="team-thumb">
                                <img src="{{ asset('front-end/img/team/s_team_img01.jpg') }}" alt="img">
                            </div>
                            <div class="team-content s-team-content text-center">
                                <h4>Sonaban Koila</h4>
                                <span>Kitchen Cleaner</span>
                                <div class="team-socail">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-team fix mb-30 p-relative">
                            <div class="team-thumb">
                                <img src="{{ asset('front-end/img/team/s_team_img02.jpg') }}" alt="img">
                            </div>
                            <div class="team-content s-team-content text-center">
                                <h4>Brian Ramirez</h4>
                                <span>Office Cleaner</span>
                                <div class="team-socail">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="s-single-team fix mb-30 p-relative">
                            <div class="team-thumb">
                                <img src="{{ asset('front-end/img/team/s_team_img03.jpg') }}" alt="img">
                            </div>
                            <div class="team-content s-team-content text-center">
                                <h4>kabila roma</h4>
                                <span>Kitchen Cleaner</span>
                                <div class="team-socail">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-team-shape rotateme"><img src="{{ asset('front-end/img/shape/team_dots_shape.png') }}" alt="img"></div>
        </section>
        <!-- team-area-end -->
        <!-- pricing-area -->
        <section class="pricing-area pt-115 pb-60">
            <div class="container">
                <div class="row align-items-center mb-110">
                    <div class="col-xl-7 col-lg-8">
                        <div class="side-title">
                            <span class="title-line"></span>
                            <span>Our Pricing</span>
                            <h2>Outstanding Cleaning Services With Flat Pricing</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <ul class="nav nav-tabs pricing-tabs s-pricing-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="img/icon/s_pricing_icon01.png" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Basic Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$14.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box active text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="{{ asset('front-end/img/icon/s_pricing_icon02.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Standard Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$49.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="{{ asset('front-end/img/icon/s_pricing_icon03.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Premium Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$99.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="{{ asset('front-end/img/icon/s_pricing_icon01.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Basic Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$14.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box active text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="{{ asset('front-end/img/icon/s_pricing_icon02.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Standard Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$49.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="s-pricing-box text-center mb-60">
                                    <div class="s-pricing-icon">
                                        <img src="{{ asset('front-end/img/icon/s_pricing_icon03.png') }}" alt="icon">
                                    </div>
                                    <div class="pricing-head mb-30">
                                        <h4>Premium Plan</h4>
                                    </div>
                                    <div class="pricing-list mb-30">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>Vacuuming</li>
                                            <li>2 Bathroom cleaning</li>
                                            <li>Mirror Cleaning</li>
                                            <li>1 Livingroom cleaning</li>
                                            <li>Window Sills</li>
                                        </ul>
                                    </div>
                                    <div class="price-count mb-40">
                                        <h2>$99.99</h2>
                                    </div>
                                    <div class="pricing-btn s-pricing-btn">
                                        <a href="#" class="btn">Book Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->
        <!-- cta-area -->
        <section class="s-cta-area s-cta-bg pt-110 pb-120" data-background="{{ asset('front-end/img/bg/cta_bg01.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title white-t text-center s-cta-title mb-50">
                            <h2>Make Appointment Today</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris</p>
                        </div>
                        <div class="s-cta-wrap">
                            <ul>
                                <li>
                                    <div class="s-single-cta">
                                        <div class="s-cta-icon">
                                            <i class="fal fa-headphones"></i>
                                        </div>
                                        <div class="s-cta-content fix">
                                            <span>Emergency</span>
                                            <h5>+123 08 963 45</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta-or">
                                        <h2>Or</h2>
                                    </div>
                                </li>
                                <li>
                                    <div class="s-cta-btn">
                                        <a href="#" class="btn">Book Your Plan</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->
        <!-- premium-area -->
        <section class="premium-area pt-120 pb-115">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="premium-img p-relative">
                            <img src="{{ asset('front-end/img/images/premium_img.jpg') }}" alt="img">
                            <a href="https://www.youtube.com/watch?v=HcLsj1BIDSA" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 inner-premium-p pl-50">
                        <div class="side-title premium-title p-relative mb-40 pb-30">
                            <h2>Get Premium Cleaning Services</h2>
                        </div>
                        <div class="premium-content mb-40">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-premium">
                                    <div class="sp-head">
                                        <div class="sp-icon">
                                            <img src="{{ asset('front-end/img/icon/premium_icon01.png') }}" alt="icon">
                                        </div>
                                        <div class="sp-title">
                                            <h4>Commercial Cleaning</h4>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor consectetur adipisicing elit sed do eiutempor incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-premium">
                                    <div class="sp-head">
                                        <div class="sp-icon">
                                            <img src="{{ asset('front-end/img/icon/premium_icon02.png') }}" alt="icon">
                                        </div>
                                        <div class="sp-title">
                                            <h4>Residential Cleaning</h4>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor consectetur adipisicing elit sed do eiutempor incididunt ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- premium-area-end -->
        <!-- testimonial-area -->
        <section class="testimonial-area pb-240">
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
            <div class="container-fluid container-p">
                <div class="row third-testimonial-active">
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="{{ asset('front-end/img/testimonial/tt_img01.png') }}" alt="img">
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
                                <p>We have been associated with Laundris Laundry Service for almost a year and in short have been extremely pleased. Their service has been excellent and the entire organization is dedicated towards professionalism..</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="{{ asset('front-end/img/testimonial/tt_img02.png') }}" alt="img">
                                </div>
                                <div class="t-client-name third-c-name fix">
                                    <h5>Pardeshi Sine</h5>

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
                                <p>The new machines have had very few problems and their services are always done in a timely fashion. Our residents have been thrilled with the Laundris team and we look forward to a long relationship with this first-class organization.</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="{{ asset('front-end/img/testimonial/tt_img03.png') }}" alt="img">
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
                                <p>Over the last eight years they have proven, on several occasions that they are knowledgeable, prompt, and concerned about my immediate situation. I personally encourage any business associated with their laundry services.</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="img/testimonial/tt_img04.png" alt="img">
                                </div>
                                <div class="t-client-name third-c-name fix">
                                    <h5>Frank Sokla</h5>

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
                                <p>We have been associated with Laundris Laundry Service for almost a year and in short have been extremely pleased. Their service has been excellent and the entire organization is dedicated towards professionalism..</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="{{ asset('front-end/img/testimonial/tt_img05.png') }}" alt="img">
                                </div>
                                <div class="t-client-name third-c-name fix">
                                    <h5>Gunlaima Pix</h5>
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
                                <p>Over the last eight years they have proven, on several occasions that they are knowledgeable, prompt, and concerned about my immediate situation. I personally encourage any business associated with their laundry services..</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="t-single-testimonial">
                            <div class="t-client-info mb-30 fix">
                                <div class="t-client-img">
                                    <img src="{{ asset('front-end/img/testimonial/tt_img01.png') }}" alt="img">
                                </div>
                                <div class="t-client-name third-c-name fix">
                                    <h5>Tambu Radi</h5>
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
                                <p>The new machines have had very few problems and their services are always done in a timely fashion. Our residents have been thrilled with the Laundris team and we look forward to a long relationship with this first-class organization.</p>
                                <i class="fal fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
     
@endsection
