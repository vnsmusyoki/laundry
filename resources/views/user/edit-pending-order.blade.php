@extends('user.layout')
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
        <div class="page-title">Customer Dashboard</div>

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
        <div class="col-lg-12 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex">
                    <h6 class="card-title">
                        Edit Pending Laundry
                        <a href="#" class="bi bi-question-circle ms-1 small"></a>
                    </h6>
                    <div class="d-flex gap-3 align-items-center ms-auto">
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('user/update-laundry/'.$order->id) }}" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-4">
                            <label for="">Luggage Picture </label>
                            <input type="file" class="form-control" name="picture" value="{{ old('picture') }}">
                            @error('picture')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col-lg-6">
                                <label for="">Collection Point</label>
                                <select name="collection_point" id="" class="form-control">
                                    <option value="">selected {{ $order->laundrycheckpoint->collection_name }}</option>
                                    <option value="">select Nearest Location</option>
                                    @foreach ($points as $point)
                                        <option value="{{ $point->id }}">{{ $point->collection_name }}
                                            Located at {{ $point->town }}</option>
                                    @endforeach
                                </select>
                                @error('collection_point')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="">Luggage Category</label>
                                    <select name="luggage_category" id="" class="form-control">
                                        <option value="">selected {{ $order->luggage_category }}</option>
                                        <option value="">select Luggage Category</option>
                                        <option value="Clothes">Clothes</option>
                                        <option value="Dresses">Dresses</option>
                                        {{-- @foreach ($points as $point) --}}
                                        {{-- <option value="{{ $point->id }}">{{ $point->collection_name }}
                                                Located at {{ $point->town }}</option> --}}
                                        {{-- @endforeach --}}
                                    </select>
                                    @error('luggage_category')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group">
                                    <label for="">Number of Pieces</label>
                                    <select name="number_of_pieces" id="" class="form-control">
                                        <option value="">selected {{ $order->number_of_pieces }}</option>
                                        <option value="">select Luggage Pieces</option>
                                        <option value="Less than 10">Less than 10 Pieces</option>
                                        <option value="Between 10  and 30">Between 10 and 30 Pieces</option>
                                        <option value="Between 30  and 50">Between 30 and 50 Pieces</option>
                                        <option value="Above 50">Above 50</option>

                                    </select>
                                    @error('number_of_pieces')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-4">
                            <label for="">Additional Description</label>
                            <textarea name="additional_description" id="" cols="30" class="form-control"
                                rows="10">{{ $order->additional_description }}</textarea>
                            @error('additional_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger">Upload Laundry</button>
                        <a href="{{ url('user/delete-pending-order/'.$order->id) }}" class="btn btn-success">Delete order</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
