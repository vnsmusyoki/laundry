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

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All Pending Points</div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-haspopup="true"
                        aria-expanded="false">....</a>

                </div>
            </div>
        </div>
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
                            <center>No Laundries</center>
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>


@endsection
