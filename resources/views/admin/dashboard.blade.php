@extends('admin.layout')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col-lg-12 col-md-12">
            <div class="card widget">
                <div class="card-header">
                    <h5 class="card-title">Activity Overview</h5>
                </div>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-truck text-secondary"></i>
                                </div>
                                <h5 class="my-3">Delivered</h5>
                                <div class="text-muted">{{ $delivered->count() }} </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Ordered</h5>
                                <div class="text-muted">{{ $paid->count() }}</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-bar-chart text-info"></i>
                                </div>
                                <h5 class="my-3">Collectors</h5>
                                <div class="text-muted">{{ $collectors->count() }}</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">New Orders</h5>
                                <div class="text-muted">{{ $neworders->count() }}</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card widget">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">New Laundry</h5>
                    <div class="dropdown ms-auto">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm btn-floating" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>

                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-custom table-lg mb-0" id="recent-products">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Order ID</th>
                                    <th>Transaction Code</th>
                                    <th>Amount</th>
                                    <th>Deliver Back Before</th>
                                    <th>Collection Point</th>
                                    <th>Category</th>
                                    <th>No. of Pieces</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($neworders->count() >= 1)
                                    @foreach ($neworders as $key => $neworder)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/laundry/' . $neworder->picture) }}" alt=""
                                                    style="height: 50px;width:50px;border-radius:5px;">
                                            </td>
                                            <td>{{ $neworder->laundry_id }}</td>
                                            <td style="text-transform: uppercase;"> {{ $neworder->transaction_code }}</td>
                                            <td>Kshs. {{ $neworder->amount }}</td>
                                            <td>

                                               {{$neworder->pickup_date}}

                                            </td>
                                            <td>{{ $neworder->laundrycheckpoint->collection_name }}</td>
                                            <td>{{ $neworder->luggage_category }}</td>
                                            <td>{{ $neworder->number_of_pieces }}</td>
                                            <td class="text-end">
                                                <div class="d-flex">
                                                    <div class="dropdown ms-auto">
                                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">

                                                            <a href="{{ url('admin/deliver-customer-order/' . $neworder->id) }}"
                                                                class="dropdown-item">Deliver Back</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">
                                            <center>No New Laundry</center>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
