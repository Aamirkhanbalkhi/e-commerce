<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
    <meta name="description" content="">

    {{-- AJAX k liyen csrf-token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('webside/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/icon-dukamarket.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/main.css')}}">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    <header>
        <div class="header__main-area secondary-header d-none d-xl-block">
            <div class="container">
                <div class="header__for-megamenu p-relative">
                    <div class="row align-items-center header-logo-border">
                        <div class="col-xl-4">
                            <div class="header-three__search">
                                <form action="#">
                                    <input type="email" placeholder="Search products...">
                                    <i class="icon-search"></i>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="header__logo text-center">
                                <a href="index.html"><img src="{{asset('webside/assets/img/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="header__info d-flex align-items-center justify-content-end">

                                <div class="header__info-cart tpcolor__oasis ml-1">
                                    <a href="{{route('cart')}}"><i><img src="{{asset('webside/assets/img/icon/cart-1.svg')}}" alt=""></i></a>
                                    <span>{{$cartno}}</span>
                                </div>

                                <div class="header__info-wishlist wishlistCount tpcolor__greenish ml-1">
                                    <a href=" {{ route('wishlist') }} " style="text-decoration:none;"><i class="icon-heart"></i>
                                        <span>{{$wishlistno}}</span>
                                    </a>
                                </div>

                                <div class="header__info-user tpcolor__yellow ml-1 tp-cart-toggle">
                                    <a href="#"><i class="icon-user"></i> </a>
                                </div>

                                <div class="header__info-logout tpcolor__greenish ml-1">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8">
                            <div id="header-sticky" class="header__menu main-menu mainmenu-three text-center">
                                <nav id="mobile-menu">
                                    <ul>
                                        @foreach ($categorys as $category)
                                        <li>
                                        <a href="{{ route('product.list', [$category->category_slug]) }}" style="text-decoration: none;">
                                            {{$category->category_name}}
                                        </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .wishlistCount span {
                position: absolute;
                font-size: 11px;
                background-color: red;
                color: var(--tp-common-white);
                height: 18px;
                width: 18px;
                text-align: center;
                line-height: 18px;
                display: block;
                border-radius: 50px;
                top: -2px;
                right: 112px;
            }
        </style>

        <!-- header-cart-start -->
        <div id="header-cart" class="tpcartinfo tp-cart-info-area p-relative">
            <div class="tpcart">
                <h4 class="tpcart__title">Your Profile</h4>

                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4">
                        <div class="image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn">
                                <img src="{{ asset('webside/assets/img/logo/user-1.jpg') }}" height="100" width="100" />
                            </button>
                            <span class="name mt-3">User Name</span>
                            <span class="idd">user@example.com</span>
                            <div class="d-flex flex-row justify-content-center align-items-center mt-1">
                                <span class="number">500+
                                    <span class="follow">Customers</span>
                                </span>
                            </div>
                            <div class="d-flex mt">
                                <button class="btn btn-dark mt-2" onclick="openEditProfileSection()">Go to Edit Profile</button>
                            </div>
                            <div class="text mt-1">
                                <span>Our team is available during our business hours to assist you promptly.<br><br> We look forward to hearing from you and serving you better."</span>
                            </div>
                            <div class="gap-2 mt-2 icons d-flex flex-row justify-content-center align-items-center">
                                <span><i class="fa fa-twitter"></i></span>
                                <span><i class="fa fa-facebook-f"></i></span>
                                <span><i class="fa fa-instagram"></i></span>
                                <span><i class="fa fa-linkedin"></i></span>
                            </div>
                            <div class="px-2 rounded date">
                                <span class="join">Joined December,2023</span>
                            </div>
                        </div>

                        <!-- Hidden Edit Profile content -->
                        <div id="edit-cart" style="display: none; margin-top: 12%;">
                            <h4 class="tpcart__title">Edit Profile
                                <button class="position-relative" style="margin-left: 50%;" onclick="closeEditProfileSection()"><i class="icon-x"></i></button>
                            </h4>
                            <form>
                                <input type="text" placeholder="Full Name" class="form-control my-4" name="name">
                                <input type="email" placeholder="Email Address" class="form-control my-4" name="email">
                                <input type="number" placeholder="Mobile number" class="form-control my-4" name="phone">
                                <input type="file" placeholder="" class="form-control my-4" name="image_user">
                                <div class="my-5">
                                    <button class="btn btn-dark">Save Profile</button>
                                    <button class="btn btn-dark ml-2" onclick="goToProfileSection()">Back</button>
                                </div>
                            </form>
                        </div>

                        <div class="my-5 tpcart__free-shipping text-center">
                            <span>Free shipping for orders <b>under 5km</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cartbody-overlay"></div>

        <script>
            function openEditProfileSection() {
                document.getElementById('edit-cart').style.display = 'block';
                document.getElementById('edit-cart').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            function goToProfileSection() {
                document.getElementById('edit-cart').style.display = 'none';
            }

            function closeEditProfileSection() {
                document.getElementById('edit-cart').style.display = 'none';
            }
        </script>

        <!-- header-cart-end -->

        <!-- mobile-menu-area -->
        <div id="header-sticky-2" class="tpmobile-menu secondary-mobile-menu d-xl-none">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-3 col-sm-3">
                        <div class="mobile-menu-icon">
                            <button class="tp-menu-toggle"><i class="icon-menu1"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                        <div class="header__logo text-center">
                            <a href="index.html"><img src="{{asset('webside/assets/img/logo/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-3 col-sm-5">
                        <div class="header__info d-flex align-items-center">
                            <!-- <div class="header__info-search tpcolor__purple ml-10 d-none d-sm-block">
                                <button class="tp-search-toggle"><i class="icon-search"></i></button>
                            </div> -->
                            <div class="header__info-user tpcolor__yellow ml-10 d-none d-sm-block">
                                <a href="#"><i class="icon-user"></i></a>
                            </div>
                            <div class="header__info-wishlist tpcolor__greenish ml-10 d-none d-sm-block">
                                <a href="#"><i class="icon-heart icons"></i></a>
                            </div>
                            <div class="header__info-cart tpcolor__oasis ml-10 tp-cart-toggle">
                                <button><i><img src="{{asset('webside/assets/img/icon/cart-1.svg')}}" alt=""></i>
                                    <span>5</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-overlay"></div>
        <!-- mobile-menu-area-end -->

        <!-- sidebar-menu-area -->
        <div class="tpsideinfo">
            <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
            <div class="tpsideinfo__search text-center pt-35">
                <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
                <form action="#">
                    <input type="text" placeholder="Search Products...">
                    <button><i class="icon-search"></i></button>
                </form>
            </div>
            <div class="tpsideinfo__nabtab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        <div class="tpsidebar-categories">
                            <ul>
                                <li><a href="shop-details.html">Dairy Farm</a></li>
                                <li><a href="shop-details.html">Healthy Foods</a></li>
                                <li><a href="shop-details.html">Lifestyle</a></li>
                                <li><a href="shop-details.html">Organics</a></li>
                                <li><a href="shop-details.html">Photography</a></li>
                                <li><a href="shop-details.html">Shopping</a></li>
                                <li><a href="shop-details.html">Tips & Tricks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tpsideinfo__account-link">
                <a href="log-in.html"><i class="icon-user icons"></i> Login / Register</a>
            </div>
            <div class="tpsideinfo__wishlist-link">
                <a href="wishlist.html" target="_parent"><i class="icon-heart"></i> Wishlist</a>
            </div>
        </div>
        <!-- sidebar-menu-area-end -->
    </header>
    <!-- header-area-end -->
