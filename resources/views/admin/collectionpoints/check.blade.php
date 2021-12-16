<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Product Detail - Vetra | E-Commerce HTML Admin Dashboard Template </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="../../libs/slick/slick.css">
    <link rel="stylesheet" href="../../libs/slick/slick-theme.css">

    <!-- Rating -->
    <link rel="stylesheet" href="../../libs/rating/rating.min.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div class="preloader">
        <img src="../../assets/images/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->

    <!-- sidebars -->

    <!-- notifications sidebar -->
    <div class="sidebar" id="notifications">
        <div class="sidebar-header d-block align-items-end">
            <div class="align-items-center d-flex justify-content-between py-4">
                Notifications
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-content">
            <div class="tab-content">
                <div class="tab-pane active" id="activities">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-person"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            You joined a group
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-warning me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-hdd"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-bold d-flex justify-content-between">
                                            Storage is running low!
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Today
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-secondary me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-file-text"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            1 person sent a file
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-success me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-download"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            Reports ready to download
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> Yesterday
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 list-group-item">
                                <a href="#" class="d-flex">
                                    <div class="flex-shrink-0">
                                        <figure class="avatar avatar-info me-3">
                                            <span class="avatar-text rounded-circle">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 d-flex justify-content-between">
                                            2 steps verification
                                        </p>
                                        <span class="text-muted small">
                                            <i class="bi bi-clock me-1"></i> 20 min ago
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="notes">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    This month's report will be prepared.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    An email will be sent to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Today
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    The meeting will be held.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">
                                    Conversation with users.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> Yesterday
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 fw-bold text-warning d-flex justify-content-between">
                                    Payment refund will be made to the customer.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                            <li class="px-0 list-group-item">
                                <p class="mb-0 d-flex justify-content-between">
                                    Payment form will be activated.
                                </p>
                                <span class="text-muted small">
                                    <i class="bi bi-clock me-1"></i> 20 min ago
                                </span>
                                <div class="mt-2">
                                    <a href="#">Edit</a>
                                    <a href="#" class="text-danger ms-2">Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-primary btn-block">
                            <i class="bi bi-plus me-2"></i> Add Notes
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="alerts">
                    <div class="tab-pane-body">
                        <ul class="list-group list-group-flush">
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Signed in with a different device.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text fw-bold rounded-circle">
                                            <i class="bi bi-file-text"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 fw-bold d-flex justify-content-between">
                                        Your billing information is not active.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Yesterday
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-person"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your subscription has expired.
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                            <li class="px-0 list-group-item d-flex">
                                <div class="flex-shrink-0">
                                    <figure class="avatar avatar-warning me-3">
                                        <span class="avatar-text rounded-circle">
                                            <i class="bi bi-hdd"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0 d-flex justify-content-between">
                                        Your storage space is running low
                                    </p>
                                    <span class="text-muted small">
                                        <i class="bi bi-clock me-1"></i> Today
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane-footer">
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-check2 me-2"></i> Make All Read
                        </a>
                        <a href="#" class="btn btn-danger ms-2">
                            <i class="bi bi-trash me-2"></i> Delete all
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ notifications sidebar -->

    <!-- settings sidebar -->
    <div class="sidebar" id="settings">
        <div class="sidebar-header">
            <div>
                <i class="bi bi-gear me-2"></i>
                Settings
            </div>
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked>
                        <label class="form-check-label" for="flexCheckDefault1">
                            Remember next visits
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                        <label class="form-check-label" for="flexCheckDefault2">
                            Enable report generation.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" checked>
                        <label class="form-check-label" for="flexCheckDefault3">
                            Allow notifications.
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                        <label class="form-check-label" for="flexCheckDefault4">
                            Hide user requests
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" checked>
                        <label class="form-check-label" for="flexCheckDefault5">
                            Speed up demands
                        </label>
                    </div>
                </li>
                <li class="list-group-item px-0 border-0">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hide menus
                        </label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-primary">All Settings</a>
        </div>
    </div>
    <!-- ./ settings sidebar -->

    <!-- search sidebar -->
    <div class="sidebar" id="search">
        <div class="sidebar-header">
            Search
            <button data-sidebar-close>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
        <div class="sidebar-content">
            <form class="mb-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search"
                        aria-describedby="button-search-addon">
                    <button class="btn btn-outline-light" type="button" id="button-search-addon">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <h6 class="mb-3">Last searched</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Reports for 2021</a>
                    <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Current users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Meeting notes</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
            <h6 class="mb-3">Recently viewed</h6>
            <div class="mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Todo list</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Pricing table</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Settings</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                    </a>
                    <a href="#" class="flex-fill">Users</a>
                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                        <i class="bi bi-x"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-action">
            <a href="#" class="btn btn-danger">All Clear</a>
        </div>
    </div>
    <!-- ./ search sidebar -->

    <!-- ./ sidebars -->

    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="index.html" class="menu-header-logo">
                <img src="../../assets/images/logo.svg" alt="logo">
            </a>
            <a href="index.html" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <img src="../../assets/images/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                    </div>
                    <div>
                        <div class="fw-bold">Timotheus Bendan</div>
                        <small class="text-muted">Sales Manager</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-person dropdown-item-icon"></i> Profile
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                        <i class="bi bi-gear dropdown-item-icon"></i> Settings
                    </a>
                    <a href="./login.html" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                    </a>
                </div>
            </div>
            <ul>
                <li class="menu-divider">E-Commerce</li>
                <li>
                    <a href="index.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Orders</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./orders.html">List</a>
                        </li>
                        <li>
                            <a href="./order-detail.html">Detail</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-truck"></i>
                        </span>
                        <span>Products</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./product-list.html">List
                                View</a>
                        </li>
                        <li>
                            <a href="./product-grid.html">Grid
                                View</a>
                        </li>
                        <li>
                            <a class="active" href="./product-detail.html">Product Detail</a>
                        </li>
                        <li>
                            <a href="./shopping-cart.html">Shopping
                                Cart</a>
                        </li>
                        <li>
                            <a href="./checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>Buyer</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./buyer-dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="./buyer-orders.html">Orders</a>
                        </li>
                        <li>
                            <a href="./buyer-addresses.html">Addresses</a>
                        </li>
                        <li>
                            <a href="./buyer-wishlist.html">Wishlist</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./customers.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-badge"></i>
                        </span>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-receipt"></i>
                        </span>
                        <span>Invoices</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./invoices.html">List</a>
                        </li>
                        <li>
                            <a href="./invoice-detail.html">Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-divider">Apps</li>
                <li>
                    <a href="./chats.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-chat-square"></i>
                        </span>
                        <span>Chats</span>
                        <span class="badge bg-success rounded-circle ms-auto">2</span>
                    </a>
                </li>
                <li>
                    <a href="./email.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <span>Email</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./email.html">
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="./email-detail.html">
                                <span>Detail</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="./email-template.html">
                                <span>Email Template</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./todo-list.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-check-circle"></i>
                        </span>
                        <span>Todo App</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./todo-list.html">
                                <span>List</span>
                            </a>
                        </li>
                        <li>
                            <a href="./todo-detail.html">
                                <span>Details</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-divider">Pages</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./profile-posts.html">Post</a>
                        </li>
                        <li>
                            <a href="./profile-connections.html">Connections</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <span>Users</span>
                    </a>
                    <ul>
                        <li><a href="./user-list.html">List View</a></li>
                        <li><a href="./user-grid.html">Grid View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-lock"></i>
                        </span>
                        <span>Authentication</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./login.html" target="_blank">Login</a>
                        </li>
                        <li>
                            <a href="./register.html" target="_blank">Register</a>
                        </li>
                        <li>
                            <a href="./reset-password.html" target="_blank">Reset Password</a>
                        </li>
                        <li>
                            <a href="./lock-screen.html" target="_blank">Lock Screen</a>
                        </li>
                        <li>
                            <a href="./account-verified.html" target="_blank">Account Verified</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-exclamation-octagon"></i>
                        </span>
                        <span>Error Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./404.html" target="_blank">404</a>
                        </li>
                        <li>
                            <a href="./access-denied.html">Access Denied</a>
                        </li>
                        <li>
                            <a href="./under-construction.html" target="_blank">Under Construction</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./settings.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-gear"></i>
                        </span>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="./pricing-table.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-wallet2"></i>
                        </span>
                        <span>Pricing Table</span>
                        <span class="badge bg-success ms-auto">New</span>
                    </a>
                </li>
                <li>
                    <a href="./search-page.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-search"></i>
                        </span>
                        <span>Search Page</span>
                    </a>
                </li>
                <li>
                    <a href="./faq.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <span>FAQ</span>
                    </a>
                </li>
                <li class="menu-divider">User Interface</li>
                <li>
                    <a href="#" target="_blank">
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </span>
                        <span>Components</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./accordion.html">Accordion</a>
                        </li>
                        <li>
                            <a href="./alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="./badge.html">Badge</a>
                        </li>
                        <li>
                            <a href="./breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li>
                            <a href="./buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="./button-group.html">Button Group</a>
                        </li>
                        <li>
                            <a href="./card.html">Card</a>
                        </li>
                        <li>
                            <a href="./card-masonry.html">Card Masonry</a>
                        </li>
                        <li>
                            <a href="./carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="./collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="./dropdown.html">Dropdowns</a>
                        </li>
                        <li>
                            <a href="./list-group.html">List Group</a>
                        </li>
                        <li>
                            <a href="./modal.html">Modal</a>
                        </li>
                        <li>
                            <a href="./navs-tabs.html">Navs and Tabs</a>
                        </li>
                        <li>
                            <a href="./pagination.html">Pagination</a>
                        </li>
                        <li>
                            <a href="./popovers.html">Popovers</a>
                        </li>
                        <li>
                            <a href="./progress.html">Progress</a>
                        </li>
                        <li>
                            <a href="./spinners.html">Spinners</a>
                        </li>
                        <li>
                            <a href="./toasts.html">Toasts</a>
                        </li>
                        <li>
                            <a href="./tables.html">
                                <span>Tables</span>
                            </a>
                        </li>
                        <li>
                            <a href="./tooltip.html">Tooltip</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <span class="nav-link-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </span>
                        <span>Forms</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <span>Form Elements</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="./forms.html">Overview</a>
                                </li>
                                <li>
                                    <a href="./form-control.html">Form Controls</a>
                                </li>
                                <li>
                                    <a href="./select.html">Select</a>
                                </li>
                                <li>
                                    <a href="./checks-radios.html">Checks and Radios</a>
                                </li>
                                <li>
                                    <a href="./range.html">Range</a>
                                </li>
                                <li>
                                    <a href="./input-group.html">Input Group</a>
                                </li>
                                <li>
                                    <a href="./floating-label.html">Floating Label</a>
                                </li>
                                <li>
                                    <a href="./forms-layout.html">Form Layout</a>
                                </li>
                                <li>
                                    <a href="./form-validation.html">Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./form-wizard.html">
                                <span>Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a href="./form-repeater.html">
                                <span>Repeater</span>
                            </a>
                        </li>
                        <li>
                            <a href="./file-upload.html">
                                <span>File Upload</span>
                            </a>
                        </li>
                        <li>
                            <a href="./ckeditor.html">
                                <span>CKEditor</span>
                            </a>
                        </li>
                        <li>
                            <a href="./range-slider.html">
                                <span>Range Slider</span>
                            </a>
                        </li>
                        <li>
                            <a href="./select2.html">
                                <span>Select2</span>
                            </a>
                        </li>
                        <li>
                            <a href="./tags-input.html">
                                <span>Tags Input</span>
                            </a>
                        </li>
                        <li>
                            <a href="./input-mask.html">
                                <span>Input Mask</span>
                            </a>
                        </li>
                        <li>
                            <a href="./datepicker.html">
                                <span>Datepicker</span>
                            </a>
                        </li>
                        <li>
                            <a href="./clockpicker.html">
                                <span>Clock Picker</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-heart"></i>
                        </span>
                        <span>Content</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./typography.html">
                                <span>Typography</span>
                            </a>
                        </li>
                        <li>
                            <a href="./images.html">
                                <span>Images</span>
                            </a>
                        </li>
                        <li>
                            <a href="./figures.html">
                                <span>Figures</span>
                            </a>
                        </li>
                        <li>
                            <a href="./avatar.html">
                                <span>Avatar</span>
                            </a>
                        </li>
                        <li>
                            <a href="./icons.html">
                                <span>Icons</span>
                            </a>
                        </li>
                        <li>
                            <a href="./colors.html">
                                <span>Colors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Charts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./apexchart.html">Apex Chart</a>
                        </li>
                        <li>
                            <a href="./chartjs.html">Chartjs</a>
                        </li>
                        <li>
                            <a href="./justgage.html">Justgage</a>
                        </li>
                        <li>
                            <a href="./morsis.html">Morsis</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-paperclip"></i>
                        </span>
                        <span>Extensions</span>
                    </a>
                    <ul>
                        <li>
                            <a href="./vector-map.html">
                                <span>Vector Map</span>
                            </a>
                        </li>
                        <li>
                            <a href="./datatable.html">
                                <span>Datatable</span>
                            </a>
                        </li>
                        <li>
                            <a href="./sweet-alert.html">Sweet Alert</a>
                        </li>
                        <li>
                            <a href="./lightbox.html">Lightbox</a>
                        </li>
                        <li>
                            <a href="./introjs.html">Introjs</a>
                        </li>
                        <li>
                            <a href="./nestable.html">Nestable</a>
                        </li>
                        <li>
                            <a href="./rating.html">Rating</a>
                        </li>
                        <li>
                            <a href="./code-highlighter.html">Code Highlighter</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-divider">Other</li>
                <li>
                    <a href="#">
                        <span class="nav-link-icon">
                            <i class="bi bi-list"></i>
                        </span>
                        <span>Menu Item</span>
                    </a>
                    <ul>
                        <li><a href="#">Menu Item 1</a></li>
                        <li>
                            <a href="#">Menu Item 2</a>
                            <ul>
                                <li>
                                    <a href="#">Menu Item 2.1</a>
                                </li>
                                <li>
                                    <a href="#">Menu Item 2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="disabled">
                        <span class="nav-link-icon">
                            <i class="bi bi-hand-index-thumb"></i>
                        </span>
                        <span>Disabled</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./  menu -->

    <!-- layout-wrapper -->
    <div class="layout-wrapper">

        <!-- header -->
        <div class="header">
            <div class="menu-toggle-btn">
                <!-- Menu close button for mobile devices -->
                <a href="#">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img width="100" src="../../assets/images/logo.svg" alt="logo">
            </a>
            <!-- ./ Logo -->
            <div class="page-title">Product Detail</div>
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

            <div class="mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="slick-wrapper">
                                        <div class="slider-for mb-3">
                                            <div class="slick-slide-item">
                                                <img src="../../assets/images/products/2.jpg" class="w-100 rounded"
                                                    alt="image">
                                            </div>
                                            <div class="slick-slide-item">
                                                <img src="../../assets/images/products/1.jpg" class="w-100 rounded"
                                                    alt="image">
                                            </div>
                                            <div class="slick-slide-item">
                                                <img src="../../assets/images/products/3.jpg" class="w-100 rounded"
                                                    alt="image">
                                            </div>
                                            <div class="slick-slide-item">
                                                <img src="../../assets/images/products/4.jpg" class="w-100 rounded"
                                                    alt="image">
                                            </div>
                                            <div class="slick-slide-item">
                                                <img src="../../assets/images/products/5.jpg" class="w-100 rounded"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="slick-nav-wrapper">
                                            <div class="slider-nav">
                                                <div class="slick-slide-item m-2">
                                                    <img src="../../assets/images/products/2.jpg"
                                                        class="w-100 rounded" alt="image">
                                                </div>
                                                <div class="slick-slide-item m-2">
                                                    <img src="../../assets/images/products/1.jpg"
                                                        class="w-100 rounded" alt="image">
                                                </div>
                                                <div class="slick-slide-item m-2">
                                                    <img src="../../assets/images/products/3.jpg"
                                                        class="w-100 rounded" alt="image">
                                                </div>
                                                <div class="slick-slide-item m-2">
                                                    <img src="../../assets/images/products/4.jpg"
                                                        class="w-100 rounded" alt="image">
                                                </div>
                                                <div class="slick-slide-item m-2">
                                                    <img src="../../assets/images/products/5.jpg"
                                                        class="w-100 rounded" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex justify-content-between align-items-start mt-4 mt-md-0">
                                        <div>
                                            <div class="small text-muted mb-2">Technology Products</div>
                                            <h2>Ultimate Ears Wonderboom</h2>
                                            <p>
                                                <span class="badge bg-success">In stock</span>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda
                                                autem eaque error explicabo fugiat iusto necessitatibus, temporibus.
                                                Laudantium,
                                                voluptate?</p>
                                            <div class="d-flex gap-3 mb-3 align-items-center">
                                                <h4 class="text-muted mb-0">
                                                    <del>$699,99</del>
                                                </h4>
                                                <h4 class="mb-0">$499,90</h4>
                                            </div>
                                            <div class="d-flex gap-2 mb-3">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-muted"></i>
                                                <span>(3)</span>
                                            </div>
                                            <p>Features:</p>
                                            <p>It is a long established fact that a reader will be distracted.
                                                Contrary to popular belief, Lorem Ipsum is not text.
                                                There are many variations of passages of Lorem.</p>
                                            <form class="mt-4">
                                                <div class="row row-cols-lg-auto">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" value="1">
                                                            <button class="btn btn-primary" type="button">Add To
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <a href="#" class="btn btn-icon flex-shrink-0">
                                            <i class="bi bi-heart-fill text-danger"></i> 50
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        href="#description" role="tab" aria-controls="description"
                                        aria-selected="true">Descriptions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                                        role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="sss-tab" data-bs-toggle="tab" href="#sss" role="tab"
                                        aria-controls="sss" aria-selected="false">SSS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <p class="font-weight-bold">Where was he raised?</p>
                                    <p>Vivamus ultricies augue vitae commodo condimentum. Nullamfaucibus eros eu mauris
                                        feugiat, eget consectetur tortor tempus. Sed volutpatmollis dui eget fringilla.
                                        Vestibulum blandit urna ut tellus lobortis tristique.Vestibulum ante ipsum
                                        primis in
                                        faucibus orci luctus et ultrices posuere cubiliaCurae; Pellentesque quis cursus
                                        mauris. Nam in ornare erat. Vestibulum convallisenim ac massa dapibus
                                        consectetur.
                                        Maecenas facilisis eros ac felis mattis, egetauctor sapien varius.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores
                                        dolorum
                                        earum fugiat nostrum obcaecati, quis ratione rerum sapiente soluta!</p>
                                    <p class="font-weight-bold">Chemicals in</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur,
                                        reiciendis!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi, aperiam
                                        corporis, dolorum fugiat fugit maxime nisi optio quo similique sit sunt tempora.
                                        Commodi culpa debitis deleniti dolore maiores, maxime praesentium. Autem dicta
                                        dolore ipsum molestiae quae, quasi soluta tempora.</p>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mb-5">
                                                <div class="display-6">4.0</div>
                                                <div class="d-flex gap-2 my-3">
                                                    <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                    <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                    <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                    <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                    <i class="bi bi-star-fill icon-lg text-muted"></i>
                                                    <span>(3)</span>
                                                </div>
                                            </div>
                                            <div class="list-group list-group-flush mb-4">
                                                <div class="list-group-item d-flex px-0">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <span class="avatar-text bg-purple rounded-circle">R</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Rodger Stutely</h5>
                                                        <div class="d-flex gap-2 mb-3">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-muted"></i>
                                                        </div>
                                                        <div>I love your products. It is very easy and fun to use this
                                                            panel. I would
                                                            recommend it
                                                            to
                                                            everyone.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex px-0">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <span class="avatar-text bg-orange rounded-circle">C</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Corly Hailston</h5>
                                                        <div class="d-flex gap-2 mb-3">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        </div>
                                                        <div>I love your products. It is very easy and fun to use this
                                                            panel. I would
                                                            recommend it
                                                            to
                                                            everyone.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item d-flex px-0">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="../../assets/images/user/man_avatar2.jpg"
                                                            class="rounded-circle" alt="image">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-1">Hurleigh Smallcomb</h5>
                                                        <div class="d-flex gap-2 mb-3">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        </div>
                                                        <div>I love your products. It is very easy and fun to use this
                                                            panel. I would
                                                            recommend it
                                                            to
                                                            everyone.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label">Comment:</label>
                                                    <textarea rows="3" class="form-control"
                                                        placeholder="Your opinion on the product"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Rate:</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="rating-example"></div>
                                                        <div class="live-rating ms-3"></div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary mt-3" type="button"
                                                    id="button-addon2">Send Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    How are the delivery processes carried out?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">It has survived not only five centuries,
                                                    but
                                                    also the leap into electronic typesetting, remaining essentially
                                                    unchanged. It was popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages, and more recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Is there a payment option at the door?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">It has survived not only five centuries,
                                                    but
                                                    also the leap into electronic typesetting, remaining essentially
                                                    unchanged. It was popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages, and more recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    How many can I order at the same time?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">It has survived not only five centuries,
                                                    but
                                                    also the leap into electronic typesetting, remaining essentially
                                                    unchanged. It was popularised in the 1960s with the release of
                                                    Letraset sheets containing Lorem Ipsum passages, and more recently
                                                    with desktop publishing software like Aldus PageMaker including
                                                    versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- ./ content -->

        <!-- content-footer -->
        <footer class="content-footer">
            <div>© 2021 Vetra - <a href="https://laborasyon.com" target="_blank">Laborasyon</a></div>
            <div>
                <nav class="nav gap-4">
                    <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </footer>
        <!-- ./ content-footer -->

    </div>
    <!-- ./ layout-wrapper -->

    <!-- Bundle scripts -->
    <script src="../../libs/bundle.js"></script>

    <!-- Slick -->
    <script src="../../libs/slick/slick.min.js"></script>

    <!-- Examples -->
    <script src="../../dist/js/examples/product-detail.js"></script>

    <!-- Rating -->
    <script src="../../libs/rating/jquery.rating.min.js"></script>

    <!-- Main Javascript file -->
    <script src="../../dist/js/app.min.js"></script>
</body>

</html>
