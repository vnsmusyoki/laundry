<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Vetra | E-Commerce HTML Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />

    <!-- Themify icons -->
    <link rel="stylesheet" href="{{ asset('backend/dist/icons/themify-icons/themify-icons.css') }}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.min.css') }}" type="text/css">


</head>

<body class="auth">




    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="{{ asset('backend/assets/images/logo.svg') }}" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Sign In</h1>
                                    <p class="text-muted">Sign in to Klear to continue</p>
                                </div>
                                <form class="mb-5" action="{{ route('login') }}" method="POST"
                                    autocomplete="off">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Enter email" autofocus
                                            required name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Enter password" required name="password">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-center text-lg-start">

                                        @if (Route::has('password.request'))

                                            <p class="small">Can't access your account? <a href="{{ route('password.request') }}">Reset your
                                                password now</a>.</p>
                                        @endif
                                        <button class="btn btn-primary" type="submit">Sign In</button>
                                    </div>
                                </form>

                                <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                    Don't have an account? <a href="#">Sign up</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">

                                    <a href="{{ url('/')}}"><img  width="120" src="{{  asset('front-end/img/logo/logo.png') }}" alt="img"></a>
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to Klear!</h3>
                            <p class="lead my-5">If you don't have an account, would you like to register right
                                now?</p>
                            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
                        </div>
                        <ul class="list-inline">


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bundle scripts -->
    <script src="{{ asset('backend/libs/bundle.js') }}"></script>

    <!-- Main Javascript file -->
    <script src="{{ asset('backend/dist/js/app.min.js') }}"></script>
</body>

</html>
