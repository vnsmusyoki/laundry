@extends('pages.layout')
@section('title', 'House Cleaning')
@section('content')
     <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="{{  asset('front-end/img/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>House Cleaning</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">House Cleaning</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- services-area -->
    <section class="inner-services-area clean-services-p pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hcleaning-services-wrap">
                        <div class="hcleaning-img mb-30">
                            <ul>
                                <li>
                                    <img src="{{  asset('front-end/img/house_clean01.jpg') }}" alt="img">
                                </li>
                                <li>
                                    <img src="{{  asset('front-end/img/house_clean02.jpg') }}" alt="img">
                                </li>
                                <li>
                                    <img src="{{  asset('front-end/img/house_clean03.jpg') }}" alt="img">
                                </li>
                                <li>
                                    <img src="{{  asset('front-end/img/house_clean04.jpg') }}" alt="img">
                                </li>
                            </ul>
                        </div>
                        <div class="section-title mb-20">
                            <h2>House Cleaning</h2>
                        </div>
                        <div class="hcleaning-content mb-40">
                            <p>Here's how it works -- just go to our website or app and tell us your zipcode and how big your house, apartment, or flat
                            is. Handy will then connect you with a top-rated home cleaning services professional to help take the stress out of your
                            life.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="single-hclean mb-30">
                                    <div class="shclean-title mb-20">
                                        <h4><i class="fal fa-award"></i>Experienced</h4>
                                    </div>
                                    <div class="shclean-content">
                                        <p>Handy has been connecting people to professional house cleaning & other home services since 2012. In our short
                                            history,house cleaning professionals using the Handy platform have helped</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="single-hclean mb-30">
                                    <div class="shclean-title mb-20">
                                        <h4><i class="fal fa-shield-check"></i>Reliable</h4>
                                    </div>
                                    <div class="shclean-content">
                                        <p>When you schedule a cleaner or maid service through Handy to come to your home, you can rest assured knowing that
                                        someone will be at your home ready to go at the time you specified.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="single-hclean mb-30">
                                    <div class="shclean-title mb-20">
                                        <h4><i class="fal fa-praying-hands"></i>Convenient</h4>
                                    </div>
                                    <div class="shclean-content">
                                        <p>Late nights at work preventing you from keeping your apartment tidy? Too busy taking the kids to school, practices, and
                                        playdates to vacuum the floors? We know life can be crazy and unpredictable</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <div class="single-hclean mb-30">
                                    <div class="shclean-title mb-20">
                                        <h4><i class="fal fa-paper-plane"></i>Flexible</h4>
                                    </div>
                                    <div class="shclean-content">
                                        <p>Handy isn’t just for people looking for a weekly cleaning. Are you moving out of your apartment? Make sure you get your
                                        whole security deposit back and schedule a cleaning with some added extras.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hcleaning-img mt-15 mb-35">
                            <img src="{{  asset('front-end/img/house_clean05.jpg') }}" alt="img">
                        </div>
                        <div class="hcleaning-title mb-25">
                            <h4>Why Book House Cleaning Services with Handy?</h4>
                        </div>
                        <div class="hcleaning-content mb-20">
                            <p>If you’re in need of home cleaning, apartment cleaning, or a maid service, we’re simply the best, most convenient home
                            cleaning service out there. We know you want the cheapest house cleaning available while still having the confidence
                            that you will receive a cleaner who is thorough and professional, with keen attention to detail. When you sign up for a
                            Handy house cleaning plan, we aim to offer you just that.
                            </p>
                        </div>
                        <div class="hcleaning-list-wrap mb-45">
                            <div class="hcleaning-list">
                                <ul>
                                    <li><i class="far fa-check"></i> Vetted and background-checked professionals.</li>
                                    <li><i class="far fa-check"></i> Backed by the Handy Happiness Guarantee.</li>
                                    <li><i class="far fa-check"></i> Friendly 24/7 customer service</li>
                                    <li><i class="far fa-check"></i> Affordable, upfront pricing</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hcleaning-title mb-35">
                            <h4>Frequently Ask Questions</h4>
                        </div>
                        <div class="faq-wrapper cleaning-faq">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                What's included In A Cleaning?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Which Handy Professional Will Come To My Place?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Can I Skip Or Reschedule Bookings?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How Much Are House Cleaning Services?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                What Is Your Plan Cancellation Policy?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                                I Need More Help
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Handy has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to
                                            assign the best professional available.
                                            Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all
                                            future bookings.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <aside class="services-sidebar">
                        <div class="services-widget mb-60">
                            <div class="sw-title mb-40">
                                <h2>Service List</h2>
                            </div>
                            <div class="sidebar-services-list">
                                <ul>
                                    <li><img src="{{  asset('front-end/img/services_icon01.png') }}" alt="img"><a href="#">Plumbing Service</a></li>
                                    <li><img src="{{  asset('front-end/img/services_icon02.png') }}" alt="img"><a href="#">Car Washing</a></li>
                                    <li><img src="{{  asset('front-end/img/services_icon03.png') }}" alt="img"><a href="#">House Cleaning</a></li>
                                    <li><img src="{{  asset('front-end/img/services_icon04.png') }}" alt="img"><a href="#">Carpet Cleaning</a></li>
                                    <li><img src="{{  asset('front-end/img/services_icon05.png') }}" alt="img"><a href="#">Office Cleaning</a></li>
                                    <li><img src="{{  asset('front-end/img/services_icon06.png') }}" alt="img"><a href="#">Windows Cleaning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="services-widget mb-60">
                            <div class="sw-title mb-40">
                                <h2>Have a Questions?</h2>
                            </div>
                            <div class="services-form">
                                <form action="#">
                                    <div class="bp-box p-relative mb-20">
                                        <i class="fal fa-user"></i>
                                        <input type="text" name="name" placeholder="Name:">
                                    </div>
                                    <div class="bp-box p-relative mb-20">
                                        <i class="fal fa-envelope-open"></i>
                                        <input type="email" name="email" placeholder="Email:">
                                    </div>
                                    <div class="bp-box p-relative mb-20">
                                        <select name="name" class="faq-selected">
                                            <option value="">What Type Your Question?</option>
                                            <option value="">Clean my washroom</option>
                                            <option value="">Clean my windows</option>
                                            <option value="">Clean my bedroom</option>
                                        </select>
                                    </div>
                                    <button class="btn">Get Started</button>
                                </form>
                            </div>
                        </div>
                        <div class="services-widget mb-60">
                            <div class="sw-title mb-40">
                                <h2>Download Now</h2>
                            </div>
                            <div class="sidebar-services-list">
                                <ul>
                                    <li><img src="{{  asset('front-end/img/pdf.png') }}" alt="img"><a href="#">Download Document .pdf</a></li>
                                    <li><img src="{{  asset('front-end/img/doc.png') }}" alt="img"><a href="#">Download Document .doc</a></li>
                                    <li><img src="{{  asset('front-end/img/zip.png') }}" alt="img"><a href="#">Download Document .zip</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="services-widget services-add">
                            <div class="add-wrap p-relative">
                                <div class="add-img p-relative">
                                    <img src="{{  asset('front-end/img/services_sidebar_img.jpg') }}" alt="img">
                                </div>
                                <div class="add-content">
                                    <h4>We Are Always Ready to Serve you</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor</p>
                                    <a href="#" class="btn">Send Now</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- subscribe-area -->
    <section class="subscribe-area">
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