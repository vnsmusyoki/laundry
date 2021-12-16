@extends('pickpoints.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="header">
        <div class="menu-toggle-btn">
            <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <!-- Logo -->
        <a href="{{ route('customer') }}" class="logo">
            <img width="100" src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo">
        </a>
        <!-- ./ Logo -->
        <div class="page-title">Collectors Dashboard</div>

        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">

            </ul>
        </div>
        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <a href="#" class="search-bar-btn">
                <i class="bi bi-search"></i>
            </a>
            <a href="#" class="actions-btn">
                <i class="bi bi-three-dots"></i>
            </a>
        </div>
        <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">

        <div class="buyer-profile-cover bg-image mb-4" data-image="{{ asset('backend/assets/images/profile-bg.jpg') }}">
            <div
                class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
                <div class="avatar avatar-xl me-3">
                    <img src="{{ asset('backend/assets/images/user/women_avatar3.jpg') }}" class="rounded-circle"
                        alt="...">
                </div>
                <div class="my-4 my-md-0">
                    <h3 class="mb-1">{{ Auth::user()->name}}</h3>
                    <small>Collector Dashboard</small>
                </div>
                <div class="ms-md-auto">
                    <a href="{{ url('collector/account-security') }}" class="btn btn-primary btn-lg btn-icon">
                        <i class="bi bi-pencil small"></i> Edit Account
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">

                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card bg-cyan text-white-90">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-box-seam display-7 me-3"></i>
                                <div>
                                    <h4 class="mb-0">45</h4>
                                    <span>My Orders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-purple text-white-90">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-heart display-7 me-3"></i>
                                <div>
                                    <h4 class="mb-0">5</h4>
                                    <span>My Wishlist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-teal text-white-90">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-wallet2 display-7 me-3"></i>
                                <div>
                                    <h4 class="mb-0">$9,000</h4>
                                    <span>My Profit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Income by Month</h6>
                        <div id="profit"></div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Recent Activities</h6>
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 d-md-flex">
                                    <div class="flex-fill mb-1 mb-lg-0">
                                        <p class="mb-1">
                                            Your billing information is not active.
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                    <a href="#">Show</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 d-md-flex">
                                    <div class="flex-fill mb-1 mb-lg-0">
                                        <p class="mb-1">
                                            Your subscription has expired.
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                    <a href="#">Show</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 d-md-flex">
                                    <div class="flex-fill mb-1 mb-lg-0">
                                        <p class="mb-1">
                                            Your storage space is running low
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Last Week
                                        </span>
                                    </div>
                                    <a href="#">Show</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column gap-2">
                            <li class="nav-item">
                                <a class="nav-link  active " href="./buyer-dashboard.html">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./buyer-orders.html">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./buyer-addresses.html">My Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="./buyer-wishlist.html">Wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./ content -->
@endsection