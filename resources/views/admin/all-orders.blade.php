@extends('admin.layout')
@section('title', 'All Orders')
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
                    <th>Transaction Code</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                    <th>Collection Point</th>
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
                            <td> {{ $order->transaction_code }}</td>
                            <td>Kshs. {{ $order->amount }}</td>
                            <td>

                                @if ($order->payment_status == 'Pending')
                                    <span class="badge bg-warning">Not Confirmed</span>
                                @elseif( $order->payment_status == "confimed")
                                    <span class="badge bg-success">Confirmed</span>
                                @else
                                    <span class="badge bg-danger">Cancelled</span>
                                @endif

                            </td>
                            <td>{{ $order->laundrycheckpoint->collection_name }}</td>
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
                                            @if ($order->payment_status == 'Pending')
                                                <a href="{{ url('admin/confirm-payment/'. $order->id) }}"
                                                    class="dropdown-item">Verify Payment</a>
                                            @endif
                                            <a href="{{ url('admin/view-customer-order/' . $order->id) }}"
                                                class="dropdown-item">Details</a>
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
