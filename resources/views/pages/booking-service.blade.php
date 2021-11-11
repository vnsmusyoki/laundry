@extends('pages.layout')
@section('title', 'Booking Our Service')
@section('content')
     <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="{{  asset('front-end/img/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Calculate Your Cost</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Calculate Your Cost</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- calculate-area -->
    <section class="calculate-area pt-110 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-center mb-45 calculate-title">
                    <h2>Calculate Your Cost</h2>
                    <p>Great! Few details and we can complete your booking.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="calculate-left">
                        <form action="#" class="calculate-form">
                            <div class="calculate-box mb-40">
                                <select name="name" class="calculate-selected">
                                    <option value="">Choose your service</option>
                                    <option value="">Clean my washroom</option>
                                    <option value="">Clean my windows</option>
                                    <option value="">Clean my bedroom</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-40">
                                <label>kitchen Cleaning</label>
                                <select name="name" class="calculate-selected">
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-50">
                                <label>Dining Room</label>
                                <select name="name" class="calculate-selected">
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-50 total-calculate">
                                <label>Discount Total</label>
                                <span>$00.00</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="calculate-left">
                        <form action="#" class="calculate-form">
                            <div class="calculate-box mb-40">
                                <select name="name" class="calculate-selected">
                                    <option value="">Indicate type of cleaning</option>
                                    <option value="">Clean my washroom</option>
                                    <option value="">Clean my windows</option>
                                    <option value="">Clean my bedroom</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-40">
                                <label>Living Room Cleaning</label>
                                <select name="name" class="calculate-selected">
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-50">
                                <label>Total Area In Square Feet</label>
                                <select name="name" class="calculate-selected">
                                    <option value="">01</option>
                                    <option value="">02</option>
                                    <option value="">03</option>
                                    <option value="">04</option>
                                    <option value="">05</option>
                                </select>
                            </div>
                            <div class="calculate-box mb-50 total-calculate">
                                <label>Total Cost</label>
                                <span>$00.00</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- calculate-area-end -->
    <!-- faq-form-area -->
    <section class="faq-form-area s-faq-form-bg pt-110 pb-120" data-background="{{  asset('front-end/img/faq_form_bg03.jpg') }}">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-8 faq-right-p pr-70">
                    <div class="section-title mb-55 faq-form-title">
                        <h2>Have Any Question?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="faq-form-wrap">
                        <form action="#">
                            <div class="f-box p-relative">
                                <i class="fal fa-user"></i>
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="f-box p-relative">
                                <i class="fal fa-envelope-open"></i>
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="f-box p-relative">
                                <select name="name" class="faq-selected">
                                    <option value="">I Would Like To</option>
                                    <option value="">Clean my washroom</option>
                                    <option value="">Clean my windows</option>
                                    <option value="">Clean my bedroom</option>
                                </select>
                            </div>
                            <div class="f-box p-relative">
                                <textarea name="message" id="message" placeholder="Write a Message"></textarea>
                            </div>
                            <button class="btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-form-area-end -->
    <!-- subscribe-area -->
    <section class="subscribe-area pt-120">
        <div class="container">
            <div class="subscribe-bg" data-background="{{  asset('front-end/img/subscribe_bg.jpg') }}">
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
                            <img src="{{  asset('front-end/img/brand_img01.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img02.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img03.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img04.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img05.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img06.png') }}" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="{{  asset('front-end/img/brand_img03.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
@endsection