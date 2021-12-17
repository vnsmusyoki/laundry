@extends('pages.layout')
@section('title', 'What we Offer')
@section('content')
     <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex align-items-center breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h2>Our Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- services-area -->
    <section class="services-area pt-115 pb-40">
        <div class="container">
            <div class="row align-items-center justify-content-between services-md-75 mb-80">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="side-title">
                        <span class="title-line"></span>
                        <span>Our Services</span>
                        <h2>We Provide Best Cleaning Services</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="title-text">
                        <p>Klear Laundry and Cleaners Limited is a professional garment care, cleaning and pressing service provider, who caters for the personal and family wardrobes of men, women and children. We also serve to ensure clean and presentable hotel staff work wear. We are an exclusive laundry service provider, a choice to look after our client’s treasured clothing and household furnishings</p>
                    </div>
                </div>
            </div>
             
        </div>
    </section>
  
    <section class="premium-services s-premium-services pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="s-premium-img">
                        <img src="{{ asset('front-end/img/s_choose_img02.jpg') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 s-premium-p pl-40 pr-95">
                    <div class="side-title mb-30">
                        <h2>We Offer Premuim Services For You</h2>
                    </div>
                    <div class="s-premium-content">
                        <h5>25 Years Experience In Cleaning Services</h5>
                        <p>Dry Cleaning – We are efficient “Pick Up” dry cleaning services provider for all your suits, shirts, wedding gowns e.t.c. Our cleaning detergents are certified and acredited with an environmentally approved non carcenogenic dry and wet cleaning solution detergents manufacturer –Ecolab East Africa. Your garments are cleaned and returned without any lingering odour.</p>
                        <p class="m-0">All blankets, doona Inserts, pillows, mattress protectors, wool underlays & toppers – We offer a same day wash only or 1 day wash dry & fold service for these items. Dry cleaning also available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- premium-services-end -->
   
@endsection