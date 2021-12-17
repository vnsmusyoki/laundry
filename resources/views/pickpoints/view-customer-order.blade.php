@extends('pickpoints.layout')
@section('title', 'All Paid Orders')
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
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Order Details </li>
            </ol>
        </nav>
    </div>



    <div class="row">
        <div class="col-md-6">
            <div id="checkout-form-wizard">
                <h3>Billing</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Billing</h6>
                        <div class="text-muted">Transaction Code - <strong><span
                                    style="text-transform: uppercase;color:red;letter-spacing:2px;">{{ $order->transaction_code }}</span></strong>
                        </div>
                    </div>
                    @if ($order->payment_status == 'Pending')
                        <form action="{{ url('admin/payments-verdict/' . $order->id) }}" method="POST" autocomplete="off">
                            @method('PATCH')
                            @csrf
                            <div class="row g-4 mb-3">
                                <div class="col-md-12">
                                    <label class="form-label">Order Status</label>
                                    <select name="payment_verdict" id="" class="form-control">
                                        <option value="">Select an option</option>
                                        <option value="Accept">Accept</option>
                                        <option value="Deny">Deny/Not Received</option>
                                    </select>
                                    @error('payment_verdict')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-danger mb-5">Submit Payment Verdict Now</button>
                            </div>
                        </form>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Item</th>
                            <th>Desc</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>To Be Returned</td>
                                <td>
                                    @if ($order->payment_status == 'Cancelled')
                                        <span class="badge bg-danger">ORDER CANCELLED</span>
                                    @else
                                        {{ $order->pickup_date }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Payment Status</td>
                                <td>{{ $order->payment_status }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Collection Point</td>
                                <td>{{ $order->laundrycheckpoint->collection_name }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Owned By</td>
                                <td>{{ $order->laundrycheckpoint->phone_number }}
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Town Located</td>
                                <td>{{ $order->laundrycheckpoint->town }}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Laundry Status</td>
                                <td>
                                    @if ($order->laundry_status == 'Cleaning')
                                        <span class="badge bg-danger">Being Cleaned/Not Yet Returned to Collection
                                            Point</span>
                                    @elseif($order->payment_status == "Cancelled")
                                        Order Cancelled
                                    @else
                                        Waiting
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Collection Status</td>
                                <td>
                                    @if ($order->collection_status == 'Transported')
                                    <span class="badge bg-danger">Being Cleaned/Not Yet Returned to Collection
                                        Point</span>
                                @elseif($order->payment_status == "Cancelled")
                                    Order Cancelled
                                @else
                                    Waiting
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Delivery Status</td>
                                <td>
                                    @if ($order->delivery_status == 'NotDelivered')
                                        <span class="badge bg-danger">Being Cleaned/Not Yet Returned to Collection
                                            Point</span>
                                    @elseif($order->payment_status == "Cancelled")
                                        Order Cancelled
                                    @else
                                        Waiting
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-5">
                        <h5><strong>Luggage Description</strong></h5>
                        <p>{{ $order->additional_description }}</p>
                    </div>


                </section>

            </div>
        </div>
        <div class="col-md-6">
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
