@extends('pickpoints.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="header">
        <div class="menu-toggle-btn">
            <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <!-- Logo -->
        <a href="{{ route('collector') }}" class="logo">
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
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">

        <div class="buyer-profile-cover bg-image mb-4" data-image="{{ asset('backend/assets/images/profile-bg.jpg') }}">
            <div
                class="container d-flex align-items-center justify-content-center h-100 flex-column flex-md-row text-center text-md-start">
                <div class="avatar avatar-xl me-3">

                    @if (Auth::user()->picture == null)
                    <img src="{{ asset('backend/assets/images/user/women_avatar3.jpg') }}" class="rounded-circle"
                    alt="...">
                    @else
                        <img src="{{ asset('storage/profiles/' . Auth()->user()->picture) }}" class="rounded-circle"
                            >
                    @endif
                </div>
                <div class="my-4 my-md-0">
                    <h3 class="mb-1">{{ Auth::user()->name }}</h3>
                    <small>Collector Account</small>
                </div>
                <div class="ms-md-auto">
                    <a href="" class="btn btn-primary btn-lg btn-icon">
                        <i class="bi bi-pencil small"></i> Update Account
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Update Account Password</h6>
                        <div id="profit"></div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ url('collector/update-password') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Password</label>
                                        <input type="password" id="input-username" class="form-control" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Confirm Password</label>
                                        <input type="password" id="input-email" class="form-control"
                                            placeholder="***********" name="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-5">Update Password</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Update Profile Picture</h6>
                        <div id="profit"></div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ url('collector/update-picture') }}" method="POST" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Update Picture</label>
                                        <input type="file" id="input-username" class="form-control" name="picture">
                                        @error('picture')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-5">Update Avatar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-4">Update Account Email Address</h6>
                        <div id="profit"></div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ url('collector/update-email') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Email Address</label>
                                        <input type="email" id="input-username" class="form-control" name="email"
                                            placeholder="{{ Auth::user()->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-5">Update Email Address</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ./ content -->
@endsection
