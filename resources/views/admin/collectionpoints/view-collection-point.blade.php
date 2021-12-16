@extends('admin.layout')
@section('title', 'Collection Point Details')
@section('content')
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Collection Point Detail</li>
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
                                        <img src="{{ asset('storage/collectionpoints/' . $point->picture) }}"
                                            class="w-100 rounded" alt="Collection Point">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex justify-content-between align-items-start mt-4 mt-md-0">
                                <div>
                                    <div class="small text-muted mb-2">More Details</div>
                                    <h2>Located at - {{ $point->town }}</h2>
                                    <p>
                                        <span class="badge bg-success">Call this Number -
                                            {{ $point->phone_number }}</span>
                                    </p>
                                    <p>{{ $point->location_description }}</p>

                                    <a href="{{ url('admin/edit-collection-point/'.$point->id) }}" class="btn btn-danger">Edit Collection Point</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="sss-tab" data-bs-toggle="tab" href="#sss" role="tab"
                                aria-controls="sss" aria-selected="false">Goods Delivered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"   href="{{ url('admin/edit-collection-point/'.$point->id) }}" role="tab"
                                 aria-selected="false">Edit Collection Point</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <p class="font-weight-bold">Colection Point Manager</p>
                            <img src="{{ asset('storage/profiles/' . $point->checkpointmanager->picture) }}" alt=""
                                style="height:120px;width:120px; border-radius:50%;">
                            <div class="row">
                                <div class="col-lg-5">
                                    <table class="table table-bordered table-lg mb-5 mt-5" >
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Item</th>
                                                <th>Description</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td>Full names</td>
                                                <td>{{ $point->checkpointmanager->name }}</td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td>Email Address</td>
                                                <td>{{ $point->checkpointmanager->email }}</td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td>Member Since</td>
                                                <td>{{ $point->checkpointmanager->created_at->addHours(3)->format('l, d-m-y h:i:s a') }}
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Items Delivered Today?
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            All items?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
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
@endsection
