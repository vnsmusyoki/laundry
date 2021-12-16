@extends('pickpoints.layout')
@section('title', 'Create New Laundry')
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
        <div class="page-title">Collector Dashboard</div>

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

    <div class="row">
        <div class="col-md-8">
            <div id="checkout-form-wizard">
                <h3>Billing</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Billing</h6>
                        <div class="text-muted">Enter your Transaction Code below after payment</div>
                    </div>
                    <form action="{{ url('collector/store-payments/' . $order->id) }}" method="POST" autocomplete="off">
                        @method('PATCH')
                        @csrf
                        <div class="row g-4 mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Transaction Code</label>
                                <input type="text" class="form-control" name="transaction_code"
                                    value="{{ old('transaction_code') }}"
                                    placeholder="PAY EXACTLY KSHS. {{ $order->amount }}"
                                    style="color: darkslategrey;letter-spacing:2px;text-transform:uppercase;">
                                @error('transaction_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mb-5">Submit Payment Code Now</button>
                        </div>
                    </form>

                    <div class="mt-5">
                        <h5><strong>Luggage Description</strong></h5>
                        <p>{{ $order->additional_description }}</p>
                    </div>


                </section>

            </div>
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Order Summary</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Luggage</h6>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="{{ asset('storage/laundry/' . $order->picture) }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="list-group list-group-flush">
                        <table class="table table-bordered">
                            <thead>
                                <th>#</th>
                                <th>Item</th>
                                <th>Desc</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Category</td>
                                    <td>{{ $order->luggage_category }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Date Uploaded</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Order ID</td>
                                    <td>{{ $order->laundry_id }}</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Owned By</td>
                                    <td>{{ $order->laundryuser->name }}</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>CheckPoint Phone Number</td>
                                    <td>{{ $order->laundrycheckpoint->phone_number }}</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Number of Pieces</td>
                                    <td>{{ $order->number_of_pieces }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
