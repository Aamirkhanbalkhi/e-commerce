@extends('layouts.app')

@section('content')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('webside/assets/img/logo/favicon.png')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('webside/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('webside//css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/icon-dukamarket.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/main.css')}}">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->


    <!-- header-area-start -->
    <header>

        <div class="header__main-area d-none d-xl-block">
            <div class="container">
                <div class="header__for-megamenu p-relative">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="header__logo text-center py-2">
                                <a href="index.html"><img src="('assets/img/logo/logo.png')" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <main>
        <!-- track-area-start -->
        <section class="track-area pb-40 m-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <img src="{{ asset('webside/assets/img/logo/enterweb3.jpg') }}" alt="" style="height: 400px; width:400px;">
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="tptrack__product mb-40">
                            <div class="tptrack__content grey-bg">
                                <div class="tptrack__item d-flex mb-20">
                                    <div class="tptrack__item-icon">
                                        <i class="fal fa-user-unlock"></i>
                                    </div>
                                    <div class="tptrack__item-content">
                                        <h4 class="tptrack__item-title">Login Here</h4>
                                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account.</p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="tptrack__id mb-10">
                                        <!-- <span><i class="fal fa-user"></i></span> -->
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username / Email address">
                                    </div>
                                    <div class="tptrack__email mb-10">
                                        <!-- <span><i class="fal fa-key"></i></span> -->
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div class="tpsign__remember d-flex align-items-center justify-content-between mb-15">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <!-- <div class="tpsign__pass">
                                            <a href="{{ route('password.request') }}">Forget Password</a>
                                        </div> -->
                                    </div>
                                    <div class="tptrack__btn">
                                        <button type="submit" class="tptrack__submition active">Login Now<i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- track-area-end -->

    </main>

    <!-- JS here -->
    <script src="{{asset('webside/assets/js/jquery.js')}}"></script>
    <script src="{{asset('webside/assets/js/waypoints.js')}}"></script>
    <script src="{{asset('webside/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('webside/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('webside/assets/js/nice-select.js')}}"></script>
    <script src="{{asset('webside/assets/js/slick.js')}}"></script>
    <script src="{{asset('webside/assets/js/magnific-popup.js')}}"></script>
    <script src="{{asset('webside/assets/js/counterup.js')}}"></script>
    <script src="{{asset('webside/assets/js/wow.js')}}"></script>
    <script src="{{asset('webside/assets/js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('webside/assets/js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('webside/assets/js/countdown.js')}}"></script>
    <script src="{{asset('webside/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('webside/assets/js/meanmenu.js')}}"></script>
    <script src="{{asset('webside/assets/js/main.js')}}"></script>
</body>

</html>
@endsection
