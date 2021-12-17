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
                                <span>Say Good Bye To Laundry Days</span>
                                {{-- <h2>Modern Maintenance Inc. Has Been Delivering Results for 40 Years</h2> --}}
                            </div>
                            <div class="inner-about-content fix">
                                <p><span>We know how time-consuming laundry can be, between the washer, dryer, dry cleaning driving, etc. Therefore, we decided to give you a forever break away from dirty clothes.</p>
                                <p>Klear gets your laundry fresh, clean and perfectly organized delivered to your doorstep. With just some clicks you can schedule, and manage your pick up and drop off from anywhere.</p>
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
         
@endsection