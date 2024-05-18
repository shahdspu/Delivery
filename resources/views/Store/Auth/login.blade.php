<!DOCTYPE html>
<html lang="en">

<head>
    <title>Material Able bootstrap admin template by Codedthemes</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="{{ asset('DashboardAssets/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('DashboardAssets/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('DashboardAssets/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('DashboardAssets/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('DashboardAssets/assets/icon/icofont/css/icofont.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('DashboardAssets/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('DashboardAssets/assets/css/style.css') }}">
</head>

<body themebg-pattern="theme1">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" method="POST"
                        action="{{ route('store.login.check') }}">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('DashboardAssets/assets/images/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>

                                {{-- Validation error --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- End Validation error --}}

                                {{-- message Section --}}

                                @if (session('error_message'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('error_message') }}
                                    </div>
                                @endif

                                {{-- end  message Section --}}

                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
                                            in</button>
                                    </div>
                                </div>
                                <hr />

                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('DashboardAssets/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('DashboardAssets/assets/js/common-pages.js') }}"></script>
</body>

</html>
