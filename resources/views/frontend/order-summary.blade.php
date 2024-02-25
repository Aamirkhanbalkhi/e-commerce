
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
   <meta name="description" content="">
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
    <link rel="stylesheet" href="{{asset('webside//css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/icon-dukamarket.css')}}">
    <link rel="stylesheet" href="{{asset('webside/assets/css/main.css')}}">
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
                  </div>
                  <div class="col-xl-4">
                     <div class="header__logo text-center">
                        <a href="{{ route('home.page')}}"><img src="{{asset('webside/assets/img/logo/logo.png')}}" alt="logo"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->

   <main>

      <!-- breadcrumb-area-start -->
      <div class="breadcrumb__area pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-breadcrumb__content">
                     <div class="tp-breadcrumb__list">
                        <span class="tp-breadcrumb__active"><a href="{{ route('home.page')}}">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Cart</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- cart area -->
      <section class="cart-area pb-80">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="#">
                     <div class="table-content table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail">Product Images</th>
                                 <th class="cart-product-name">Product</th>
                                 <th class="product-price">Price</th>
                                 <th class="product-price">Quantity</th>
                                 <th class="product-subtotal">Total</th>
                                 <th class="product-quantity">Net Amount</th>
                                 {{-- <th class="product-remove">Remove</h> --}}
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="product-thumbnail">
                                    <a href="shop-details.html">
                                       <img src="{{ asset('webside/assets/img/product/products19-min.jpg') }}" alt="">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <span>Green T-shirt</span>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount"><i class="fas fa-rupee-sign"></i>
                                    1300.00</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="quantity">
                                    5</span>
                                </td>
                                 <td class="product-price">
                                    <span class="amount"><i class="fas fa-rupee-sign"></i>
                                    1300.00</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount"><i class="fas fa-rupee-sign"></i>
                                    1330.00</span>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- cart area end-->


      <!-- feature-area-start -->
      <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="{{ asset('webside/assets/img/shape/footer-shape-1.svg') }}">
         <div class="container">
            <div class="mainfeature__border pb-15">
               <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                  <div class="col">
                     <div class="mainfeature__item text-center mb-30">
                        <div class="mainfeature__icon">
                           <img src="{{ asset('webside/assets/img/icon/feature-icon-1.svg') }}" alt="">
                        </div>
                        <div class="mainfeature__content">
                           <h4 class="mainfeature__title">Fast Delivery</h4>
                           <p>Across West & East India</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="mainfeature__item text-center mb-30">
                        <div class="mainfeature__icon">
                           <img src="{{ asset('webside/assets/img/icon/feature-icon-2.svg') }}" alt="">
                        </div>
                        <div class="mainfeature__content">
                           <h4 class="mainfeature__title">safe payment</h4>
                           <p>100% Secure Payment</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="mainfeature__item text-center mb-30">
                        <div class="mainfeature__icon">
                           <img src="{{ asset('webside/assets/img/icon/feature-icon-3.svg') }}" alt="">
                        </div>
                        <div class="mainfeature__content">
                           <h4 class="mainfeature__title">Online Discount</h4>
                           <p>Add Multi-buy Discount </p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="mainfeature__item text-center mb-30">
                        <div class="mainfeature__icon">
                           <img src="{{ asset('webside/assets/img/icon/feature-icon-4.svg') }}" alt="">
                        </div>
                        <div class="mainfeature__content">
                           <h4 class="mainfeature__title">Help Center</h4>
                           <p>Dedicated 24/7 Support </p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="mainfeature__item text-center mb-30">
                        <div class="mainfeature__icon">
                           <img src="{{ asset('webside/assets/img/icon/feature-icon-5.svg') }}" alt="">
                        </div>
                        <div class="mainfeature__content">
                           <h4 class="mainfeature__title">Curated items</h4>
                           <p>From Handpicked Sellers</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- feature-area-end -->

   </main>

  @include('Includes.Frontend.footer')


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
