@extends('pages.layout')
@section('title', 'Our Contacts')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="{{  asset('front-end/img/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- map-area -->
    <!-- map-area-end -->
    <!-- contact-area -->
    <section class="inner-contact-area pb-85">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info p-relative mb-30">
                        <i class="far fa-headphones-alt"></i>
                        <h4>Phone</h4>
                        <div class="box-c-info">
                            <div class="box-c-icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="box-c-content">
                                <span>+254 745 314 414</span> 
                            </div>
                        </div>
                        <p>Call Us Anytime for your service</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info active p-relative mb-30">
                        <i class="fal fa-envelope-open"></i>
                        <h4>Email</h4>
                        <div class="box-c-info">
                            <div class="box-c-icon">
                                <i class="fal fa-envelope-open"></i>
                            </div>
                            <div class="box-c-content">
                                <span>support@gmail.com</span>
                                 
                            </div>
                        </div>
                        <p>We will get back to you as soon as we can</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info p-relative mb-30">
                        <i class="far fa-map-marked"></i>
                        <h4>Location</h4>
                        <div class="box-c-info">
                            <div class="box-c-icon">
                                <i class="far fa-map-marked"></i>
                            </div>
                            <div class="box-c-content">
                                <span>PO Box 212 - 90122</span>
                                <span>Meru, Meru Town</span>
                            </div>
                        </div>
                        <p>You can also visit our offices </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
    <!-- contact-form -->
    <section class="contact-form-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5">
                    <div class="section-title text-center mb-70">
                        <span>Contact Us</span>
                        <h2>Any Questions? Let's Talk</h2>
                    </div>
               </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="inner-contact-form text-center">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="ic-box p-relative">
                                        <i class="far fa-user-alt"></i>
                                        <input type="text" placeholder="Your Name : ">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="ic-box p-relative">
                                        <i class="fal fa-envelope-open"></i>
                                        <input type="email" placeholder="Your Email : ">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="ic-box p-relative">
                                        <select name="name" class="c-subject">
                                            <option value="">Subject :</option>
                                            <option value="">Spanish</option>
                                            <option value="">Arabic</option>
                                            <option value="">Russian</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-box p-relative">
                                <i class="far fa-pencil"></i>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                            </div>
                            <button class="btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-end -->
@endsection