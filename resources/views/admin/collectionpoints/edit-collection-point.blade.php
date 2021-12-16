@extends('admin.layout')
@section('title', 'Edit Collection Point')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex">
                    <h6 class="card-title">
                        Edit Collection Point
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
                    <form action="{{ url('admin/update-checkpoint/' . $point->id) }}" method="POST" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group mb-4">
                            <label for="">Picture </label>
                            <input type="file" class="form-control" name="picture" value="{{ old('picture') }}">
                            @error('picture')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col-lg-6">
                                <label for="">Collection Point Manager</label>
                                <input type="text" class="form-control" name="full_names"
                                    value="{{ $point->checkpointmanager->name }}">
                                @error('full_names')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="">Town Located</label>
                                    <input type="text" class="form-control" name="town" value="{{ $point->town }}">
                                    @error('town')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="number" min="1" class="form-control" name="phone_number"
                                        value="{{ $point->phone_number }}">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $point->checkpointmanager->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Location Description</label>
                            <textarea name="location_description" id="" cols="30" class="form-control"
                                rows="10">{{ $point->location_description }}</textarea>
                            @error('location_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger">Update Collection Point</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
