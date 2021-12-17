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

        <div class="table-responsive">
            <table class="table table-custom table-lg mb-10" id="orders">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Picture</th>
                        <th>Order ID</th>
                        <th>Client</th>
                        <th>Date Uploaded</th>
                        <th>Collection Point</th>
                        <th>Notify Client</th>
                        <th>Mark Complete</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($orders->count() >= 1)
                        @foreach ($orders as $key => $order)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/laundry/' . $order->picture) }}" alt=""
                                        style="height: 50px;width:50px;border-radius:5px;">
                                </td>
                                <td>{{ $order->laundry_id }}</td>
                                <td>{{ $order->laundryuser->name }}</td>
                                <td>{{ $order->created_at->addHours(3)->format('l,d-m-y, h:i:s a') }}</td>
                                <td>{{ $order->laundrycheckpoint->collection_name }}</td>
                                <td><a href="{{ url('collector/nofify-client/'.$order->id) }}" class="btn btn-primary">Notify Client</a></td>
                                <td><a href="{{ url('collector/mark-collected/' . $order->id) }}" class="btn btn-success">Mark Complete</a></td>
                                <td class="text-end">
                                    <div class="d-flex">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @if ($order->delivery_status = 'delivered to Collection Point')
                                                    <a href="{{ url('collector/nofify-client/'.$order->id) }}"
                                                        class="dropdown-item">Notify Client to Collect</a>
                                                @endif
                                                <a href="{{ url('collector/order-details/' . $order->id) }}"
                                                    class="dropdown-item">Order Details</a>
                                                <a href="{{ url('collector/mark-collected/' . $order->id) }}"
                                                    class="dropdown-item">Mark As Collected</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">
                                <center>No Collection Points added</center>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </div>
    <!-- ./ content -->
@endsection
