@extends('pages.layout')
@section('title', 'CLeaning Services')
@section('content')
     <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Office Cleaning</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cleaning Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- services-area -->
    <section class="inner-services-area cleaning-services-p pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cleaning-services-wrap">
                        <div class="section-title mb-20">
                            <h2>Office Cleaning</h2>
                        </div>
                        <div class="cleaning-content mb-35">
                            <p>A clean, well-kept facility enhances your business image and provides a healthy environment for customers and employees.
                            To help promote a healthier environment, we use only OSHA approved products to clean your office. Our products and
                            services help to reduce the spread of germs and disease as well as reduce the problem of absenteeism.</p>
                        </div>
                        <div class="cleaning-img mb-50">
                            <img src="img/services/cleaning_img01.jpg" alt="img">
                        </div>
                        <div class="cleaning-title mb-35">
                            <h4>We Suggest Using Our Office Cleaning Services . Here Is A
                            Sample Of Our Expert Cleaning Services We Do Daily</h4>
                        </div>
                        <div class="cleaning-list-wrap mb-60">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="cleaning-list-img">
                                        <img src="img/services/cleaning_img02.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="cleaning-list-img">
                                        <img src="img/services/cleaning_img03.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="cleaning-list">
                                <ul>
                                    <li><i class="far fa-check"></i> Restroom cleaning and disinfecting</li>
                                    <li><i class="far fa-check"></i> Trash gathering, collection, removal and recycling</li>
                                    <li><i class="far fa-check"></i> Stair and elevator cleaning</li>
                                    <li><i class="far fa-check"></i> Sweeping, mopping and polishing of floors</li>
                                    <li><i class="far fa-check"></i> Entrance, reception area and foyer cleaning</li>
                                    <li><i class="far fa-check"></i> Wipe and disinfect doorknobs, telephones and light switches</li>
                                    <li><i class="far fa-check"></i> Kitchen and lounge area cleaning including:</li>
                                    <li><i class="far fa-check"></i> sinks, countertops, microwaves, toasters,</li>
                                    <li><i class="far fa-check"></i> and refrigerators, Horizontal surface dusting</li>
                                    <li><i class="far fa-check"></i> Floor dusting, wet mop and machine scrubbing</li>
                                    <li><i class="far fa-check"></i> High dusting</li>
                                    <li><i class="far fa-check"></i> Stripping and refinishing</li>
                                    <li><i class="far fa-check"></i> Air condition vent cleaning</li>
                                    <li><i class="far fa-check"></i> Sanitizing all lavatory fixtures, sinks, partitions, walls, etc.</li>
                                    <li><i class="far fa-check"></i> Vacuuming</li>
                                    <li><i class="far fa-check"></i> Window washing and blind cleaning</li>
                                    <li><i class="far fa-check"></i> Cleaning of light fixtures, baseboards, millwork, etc.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cleaning-img mb-30">
                            <img src="img/services/cleaning_img04.jpg" alt="img">
                        </div>
                        <div class="cleaning-content">
                            <p>Our quality control program follows specific guidelines to ensure that all cleaning specifications are completed. In
                            addition, our supervisors verify that all cleaning is completed as detailed in your cleaning profile. However, we aren’t
                            finished there. When our cleaning is complete, we turn off all lights, lock all windows and doors, and set alarms. <br> <br>
                            You can feel secure knowing that our staff is thoroughly screened. We perform a complete reference check and train our
                            staff in product usage and cleaning procedures.
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
                                    <li><img src="img/icon/services_icon01.png" alt="img"><a href="#">Plumbing Service</a></li>
                                    <li><img src="img/icon/services_icon02.png" alt="img"><a href="#">Car Washing</a></li>
                                    <li><img src="img/icon/services_icon03.png" alt="img"><a href="#">House Cleaning</a></li>
                                    <li><img src="img/icon/services_icon04.png" alt="img"><a href="#">Carpet Cleaning</a></li>
                                    <li><img src="img/icon/services_icon05.png" alt="img"><a href="#">Office Cleaning</a></li>
                                    <li><img src="img/icon/services_icon06.png" alt="img"><a href="#">Windows Cleaning</a></li>
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
                                    <li><img src="img/icon/pdf.png" alt="img"><a href="#">Download Document .pdf</a></li>
                                    <li><img src="img/icon/doc.png" alt="img"><a href="#">Download Document .doc</a></li>
                                    <li><img src="img/icon/zip.png" alt="img"><a href="#">Download Document .zip</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="services-widget services-add">
                            <div class="add-wrap p-relative">
                                <div class="add-img p-relative">
                                    <img src="img/services/services_sidebar_img.jpg" alt="img">
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
            <div class="subscribe-bg" data-background="img/bg/subscribe_bg.jpg">
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
                            <img src="img/brand/brand_img01.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img02.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img04.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img05.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img06.png" alt="brand">
                        </div>
                        <div class="single-brand">
                            <img src="img/brand/brand_img03.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
@endsection