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
                            <p>Klear Laundry  – We are efficient “Pick Up” dry cleaning services provider for all your suits, shirts, wedding gowns e.t.c. Our cleaning detergents are certified and acredited with an environmentally approved non carcenogenic dry and wet cleaning solution detergents manufacturer –Ecolab East Africa. Your garments are cleaned and returned without any lingering odour.</p>
                            <div class="choose-list mt-40">
                                <ul>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Move Out Cleaning</h4>
                                           
                                        </div>
                                    </li>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Regular & Monthly Cleaning</h4>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="s-choose-icon">
                                            <i class="fal fa-shield-check"></i>
                                        </div>
                                        <div class="s-choose-content fix">
                                            <h4>Customer Focused Reviews</h4>
                                            
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
         
        
        <!-- cta-area -->
        <section class="s-cta-area s-cta-bg pt-110 pb-120" data-background="{{ asset('front-end/img/bg/cta_bg01.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title white-t text-center s-cta-title mb-50">
                            <h2>Make Appointment Today</h2>
                            <p>We are always happy to take the load off so that you have one less task to complete. You can book a same day delivery laundry service, complete with FREE PICKUP & DELIVERY. Go ahead and order now!</p>
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
                                            <h5>+254 745 314 414</h5>
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
                                        <a href="{{ route('login') }}" class="btn">Book Your Plan</a>
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
                            <a href="#" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 inner-premium-p pl-50">
                        <div class="side-title premium-title p-relative mb-40 pb-30">
                            <h2>Get Premium Cleaning Services</h2>
                        </div>
                        <div class="premium-content mb-40">
                            <p>We know how time-consuming laundry can be, between the washer, dryer, dry cleaning driving, etc. Therefore, we decided to give you a forever break away from dirty clothes.</p>
                                <p>KKlear Laundry Cleaners gets your laundry fresh, clean and perfectly organized delivered to your doorstep. With just some clicks you can schedule, and manage your pick up and drop off from anywhere.</p>
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
                                    <p></p>
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
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- premium-area-end -->
        
     
@endsection
