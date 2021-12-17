@extends('pickpoints.layout')
@section('title', 'All Paid Orders')
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


@endsection
