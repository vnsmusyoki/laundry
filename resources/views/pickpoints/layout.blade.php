<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Collectors | @yield('title') </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

    
    <link rel="stylesheet" href="{{ asset('backend/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css') }}"
        type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/bootstrap-docs.css') }}" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('backend/libs/slick/slick.css') }}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>

<body>
    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="{{ route('customer') }}" class="menu-header-logo">
                <img src="{{ asset('front-end/img/logo/logo.png') }}" alt="img">
            </a>

            <a href="{{ route('customer') }}" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">

                        @if (Auth::user()->picture == null)
                        <img src="{{ asset('backend/assets/images/user/man_avatar3.jpg') }}" class="rounded-circle"
                        alt="image">
                        @else
                            <img src="{{ asset('storage/profiles/' . Auth()->user()->picture) }}"
                                class="rounded-circle">
                        @endif
                    </div>
                    <div>
                        <div class="fw-bold">{{ Auth::user()->name }}</div>
                        <small class="text-muted">Customer Dashboard</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ url('user/account-security') }}" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <a href="{{ url('user/account-security') }}" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-envelope dropdown-item-icon"></i> Profile Avatar
                    </a>
                    <a href="{{ url('user/account-security') }}" class="dropdown-item d-flex align-items-center"
                        data-sidebar-target="#settings">
                        <i class="bi bi-gear dropdown-item-icon"></i> Update Email
                    </a>
                    <a href="{{ url('user/account-security') }}"
                        class="dropdown-item d-flex align-items-center text-danger">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Update Password
                    </a>

                    <a href="{{ route('logout') }}" class="dropdown-item d-flex align-items-center text-danger"
                        onclick="event.preventDefault();
                    document.getElementById('logout-forms').submit();">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Log Out
                    </a>

                    <form id="logout-forms" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            <ul>
                <li>
                    <a href="{{ route('customer') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/new-laundry') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Place New Laundry</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/all-pending-orders') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>All Pending Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/all-orders') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>All Laundries</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/all-transactions') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>All Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/pending-laundries') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge"></i>
                        </span>
                        <span>Pending Laundries</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('user/account-security') }}">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Secure Account</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="nav-link-icon">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <span>Log Out</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">



        @yield('content')



    </div>
    <!-- ./ layout-wrapper -->

    <script src="{{ asset('backend/libs/bundle.js') }}"></script>
    <script src="{{ asset('backend/libs/charts/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/libs/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/examples/dashboard.js') }}"></script>

    <!-- Main Javascript file -->
    <script src="{{ asset('backend/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>
