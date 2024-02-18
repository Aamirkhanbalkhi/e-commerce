@extends('layout.frontend')

@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area pb-3">
        <div class="container">

            @include('Includes.Admin.alert')

            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="{{route('home.page')}}">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- wishlist-area-start -->
    <div class="cart-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Product Images</th>
                                        <th class="cart-product-name">Product's Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total Price</th>
                                        <th class="product-add-to-cart">Add To Cart</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlistItems as $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="{{('uploads/'. $product->product->image_url_1)}}" alt="">
                                        </td>
                                        <td class="product-name">
                                            <span>{{$product->product->product_name}}</span>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount fw-bold"> ₹ {{$product->product->price}} </span>
                                        </td>
                                        <td class="product-quantity">
                                            <span class="cart-minus">-</span>
                                            <input class="cart-input" type="text" value="1">
                                            <span class="cart-plus">+</span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount fw-bold"> ₹ 789.00 </span>
                                        </td>
                                        <td class="product-add-to-cart">
                                        <button class="tp-btn tp-color-btn tp-wish-cart banner-animation">Add To
                                            Cart</button>
                                        </td>
                                        <td class="product-remove">
                                        <a href="{{ route('removeToWishlist', $product->id) }}" onclick="return confirm('Are You sure you want to Delete Wishlist ?');">
                                            <i class="fa fa-trash text-black"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- wishlist-area-end-->


    <!-- feature-area-start -->
    <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40" data-background="{{asset('webside/assets/img/shape/footer-shape-1.svg')}}">
        <div class="container">
            <div class="mainfeature__border pb-15">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{asset('webside/assets/img/icon/feature-icon-1.svg')}}" alt="">
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
                                <img src="{{asset('webside/assets/img/icon/feature-icon-2.svg')}}" alt="">
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
                                <img src="{{asset('webside/assets/img/icon/feature-icon-3.svg')}}" alt="">
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
                                <img src="{{asset('webside/assets/img/icon/feature-icon-4.svg')}}" alt="">
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
                                <img src="{{asset('webside/assets/img/icon/feature-icon-5.svg')}}" alt="">
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

@endsection
