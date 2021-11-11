@extends('pages.layout')
@section('title', 'Plumbing Services')
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="{{  asset('front-end/img/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Plumbing Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{  url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Plumbing Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- services-area -->
    <section class="inner-services-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="plumbing-services-wrap">
                        <div class="plumbing-img mb-50">
                            <img src="{{  asset('front-end/img/plumbing_img01.jpg') }}" alt="img">
                        </div>
                        <div class="section-title mb-20">
                            <h2>Plumbing Services</h2>
                        </div>
                        <div class="plumbing-content mb-40">
                            <p>We serve New Jersey residents with experienced service methods, prompt response times, and affordable pricing since
                            2005. Our professional plumbing specialists have over 50 years of combined experience in plumbing, heating, and drain
                            jobs. We work with residential, multi-family, commercial, and industrial property owners and managers to deliver quality
                            plumbing services when you need them. We perform plumbing installation, repairs, and maintenance to give you
                            long-lasting plumbing solutions. From a simple clogged drain to plumbing installation for a new bathroom, we gaurantee
                            the job will be completed to your complete satisfaction.</p>
                        </div>
                        <div class="plumbing-title mb-35">
                            <h4>Our Expert Plumbing Are Available To Remedy Many
                            Plumbing Problems Including</h4>
                        </div>
                        <div class="plumbing-list-wrap mb-45">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-12 col-md-5">
                                    <div class="plumbing-list-img">
                                        <img src="{{  asset('front-end/img/plumbing_img02.jpg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-12 col-md-7">
                                    <div class="plumbing-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Gas Leak Repairs</li>
                                            <li><i class="far fa-check"></i> Frozen Pipe Repairs</li>
                                            <li><i class="far fa-check"></i> Water Leak Repair</li>
                                            <li><i class="far fa-check"></i> Toilet Repair</li>
                                            <li><i class="far fa-check"></i> Toilet Installation</li>
                                            <li><i class="far fa-check"></i> Faucet Repair</li>
                                            <li><i class="far fa-check"></i> Faucet Installation</li>
                                        </ul>
                                        <ul>
                                            <li><i class="far fa-check"></i> Bathtub Repair</li>
                                            <li><i class="far fa-check"></i> Installation</li>
                                            <li><i class="far fa-check"></i> Grease Trap</li>
                                            <li><i class="far fa-check"></i> Trap Cleaning</li>
                                            <li><i class="far fa-check"></i> Maintenance</li>
                                            <li><i class="far fa-check"></i> Faucet Repair</li>
                                            <li><i class="far fa-check"></i> Excavating</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="plumbing-title mb-20">
                            <h4>Hurricane Plumbing, Heating, & Drains is a Fully Licensed
                            And Insured Plumbing Company</h4>
                        </div>
                        <div class="plumbing-content mb-40">
                            <p>Quick-fix plumbing repairs can quickly create larger problems. Our professional plumbers are available for minor repairs
                            and large-scale repairs, completing each with the same level of expertise and skills. At Hurricane Plumbing, Heating, &
                            Drains, we require our plumbers to undergo extensive, ongoing training to remain informed on the latest industry
                            innovations and methods. Because of this commitment, we do not sub-contract our plumbers.</p>
                        </div>
                        <div class="plumbing-title mb-35">
                            <h4>Our Well-Maintained Fleet Of Plumbing Service Vehicles
                            Are Fully Stocked With A Wide Vehicles Of Service Party And Tools</h4>
                        </div>
                        <div class="plumbing-img mb-30">
                            <img src="{{  asset('front-end/img/plumbing_img03.jpg') }}" alt="img">
                        </div>
                        <div class="plumbing-content">
                            <p>No matter what plumbing service or repair you need, our certified plumbers have the parts to promptly complete the job. <br>
                                For more information about our plumbing services, call Hurricane Plumbing, Heating, & Drains at (973) 786-1360. <br>
                                Hurricane Plumbing, Heating, & Drains – Your Expert Plumbing Services
                            </p>
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