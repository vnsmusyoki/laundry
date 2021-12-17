@extends('user.layout')
@section('title', 'All Pending Orders')
@section('content')
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
    </div>

   
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Order ID</th>
                    <th>Amount</th>
                    <th>Date Uploaded</th>
                    <th>Collection Point</th>
                    <th>Collection Status</th>
                    <th>Category</th>
                    <th>No. of Pieces</th>
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
                            <td>Kshs. {{ $order->amount }}</td>
                            <td>{{ $order->created_at->addHours(3)->format('l,d-m-y, h:i:s a') }}</td>
                            <td>{{ $order->laundrycheckpoint->collection_name }}</td>
                            <td>
                                @if ($order->delivery_status == "NotDelivered")
                                <span class="badge bg-warning">Being Cleaned</span>
                                @elseif($order->delivery_status == "Cancelled")
                                <span class="badge bg-warning">Order Cancelled</span>
                                @elseif($order->delivery_status == "delivered to Collection Point")
                                <span class="badge bg-success">Being transported Back</span>
                                @elseif($order->delivery_status == "returned to CheckPoint")
                                <span class="badge bg-success">Waiting You to Pick from Delivery Point</span>
                                @elseif($order->delivery_status == "Taken by Customer")
                                <span class="badge bg-success">Delivered & Taken</span>
                                @else
                                <span class="badge bg-danger">Pending</span>
                                @endif
                            </td>
                            <td>{{ $order->luggage_category }}</td>
                            <td>{{ $order->number_of_pieces }}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">

                                                <a href="{{ url('user/view-order/' . $order->id) }}"
                                                    class="dropdown-item">View Details</a>

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


@endsection
