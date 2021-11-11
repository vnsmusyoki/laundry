@extends('pages.layout')
@section('title', 'Car Washing')
@section('content')
     <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Car Washing</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Car Washing</li>
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
                    <div class="car-services-wrap">
                        <div class="car-img mb-30">
                            <img src="img/services/car_wash_img01.jpg" alt="img">
                        </div>
                        <div class="section-title mb-20">
                            <h2>Car Washing</h2>
                        </div>
                        <div class="car-content mb-40">
                            <p>Hearing a strange sound under the hood? We're here to help! Repairs to your vehicle should never be overlooked. Big or
                            small, our certified technicians can handle any sized repair to get you back on the road.The one-stop shop for your
                            non-stop fleet. Preventive maintenance is the key to keeping your fleet on the road. So don't just trust your vehicles
                            to anyone, bring them to the fleet experts at Pep Boys to save you time and money.</p>
                        </div>
                        <div class="car-list-wrap mb-45">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="car-title mb-35">
                                        <h4>Preventive Maintenance</h4>
                                    </div>
                                    <div class="car-list-img">
                                        <img src="img/services/car_wash_img02.jpg" alt="img">
                                    </div>
                                    <div class="car-wash-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Oil Changes</li>
                                            <li><i class="far fa-check"></i> Car Battery Services</li>
                                            <li><i class="far fa-check"></i> Starting & Charging System Services</li>
                                            <li><i class="far fa-check"></i> Headlight Restoration Services</li>
                                            <li><i class="far fa-check"></i> Air Conditioning Services</li>
                                            <li><i class="far fa-check"></i> Filter Replacement</li>
                                            <li><i class="far fa-check"></i> Fluid Exchange Services</li>
                                            <li><i class="far fa-check"></i> Fuel System Services</li>
                                            <li><i class="far fa-check"></i> Scheduled Maintenance Services</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="car-title mb-35">
                                        <h4>Repair Services</h4>
                                    </div>
                                    <div class="car-list-img">
                                        <img src="img/services/car_wash_img03.jpg" alt="img">
                                    </div>
                                    <div class="car-wash-list">
                                        <ul>
                                            <li><i class="far fa-check"></i> Heating & Cooling Services</li>
                                            <li><i class="far fa-check"></i> Belts and Hoses</li>
                                            <li><i class="far fa-check"></i> Brakes Services</li>
                                            <li><i class="far fa-check"></i> Diagnostic and Evaluation Services</li>
                                            <li><i class="far fa-check"></i> Steering & Suspension Servicesrvices</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="car-img mb-45">
                            <img src="img/services/car_wash_img04.jpg" alt="img">
                        </div>
                        <div class="car-title mb-20">
                            <h4>Honda Cars, Trucks, Hatchbacks and SUVs in Stock</h4>
                        </div>
                        <div class="car-content">
                            <p>At Pep Boys, we are people helping people and their cars. We don’t just fix your car and send you down the road. Our
                            experienced, professional technicians understand every repair and that every customer is different from the last. We
                            strive to redefine what auto service means to you. <br><br>
                            Our ASE- Certified technicians are on staff nationwide and our service bays are stocked with state-of-the-art-equipment
                            to handle any repair, maintenance service or tire installation or repair. With our wide car parts and car accessories
                            selection, Pep Boys can be your one-stop shop for automotive maintenance. We know that an automotive issue can happen at
                            any time and our bays are open seven days a week in most locations. Additionally, we stand behind every car repair we
                            make by participating in the Motorist Assurance Program (MAP), which guides our strict business practices- and
                            everything our technicians do
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