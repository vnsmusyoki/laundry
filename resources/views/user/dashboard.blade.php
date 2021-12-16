@extends('user.layout')
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
    <div class="page-title">Customer Dashboard</div>
    <form class="search-form">
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2"
                    data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/3.jpg" class="rounded"
                                        width="60" alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/4.jpg" class="rounded"
                                        width="60" alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/5.jpg" class="rounded"
                                        width="60" alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/6.jpg" class="rounded"
                                        width="60" alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
            </li>
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
                <img src="{{ asset('backend/assets/images/user/women_avatar3.jpg') }}" class="rounded-circle" alt="...">
            </div>
            <div class="my-4 my-md-0">
                <h3 class="mb-1">Wendell Dikes</h3>
                <small>Buyer</small>
            </div>
            <div class="ms-md-auto">
                <a href="./settings.html" class="btn btn-primary btn-lg btn-icon">
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
