<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Skote.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('/') }}assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset('/') }}assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Enter password" required autocomplete="current-password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}assets/js/app.js"></script>
</body>
</html>
