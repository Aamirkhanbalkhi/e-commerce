@extends('layout.frontend')

@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area grey-bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="{{route('home.page')}}">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- shop-area-start -->
    <section class="shop-area-start grey-bg pb-200">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="tpshop__details">
                        <div class="product__filter-content mb-30">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <div class="product__item-count">
                                        <span>Showing 1 - 18 of 40 Products</span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product__navtabs d-flex justify-content-end align-items-center">
                                        <div class="tp-shop-selector">
                                            <select style="display: none;">
                                                <option>Default sorting</option>
                                                <option>Show 14</option>
                                                <option>Show 08</option>
                                                <option>Show 20</option>
                                            </select>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Default sorting</span>
                                                <ul class="list">
                                                    <li data-value="Show 12" class="option selected">Default sorting</li>
                                                    <li data-value="Show 14" class="option">Short popularity</li>
                                                    <li data-value="Show 08" class="option">Show 08</li>
                                                    <li data-value="Show 20" class="option">Show 20</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                    @foreach($detaillist as $product)
                                    <div class="col">
                                        <div class="tpproduct p-relative mb-20">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="{{ asset('uploads/'. $product->image_url_1) }}" alt=""></a>
                                                <a class="tpproduct__thumb-img" href="#"><img src="{{ asset('uploads/'. $product->image_url_2) }}" alt=""></a>
                                                <div class="tpproduct__info bage">

                                                    @if($product->category_name === 'cloth')
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                    @endif
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="#">{{$product->title}}</a>,
                                                    <a href="#"></a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="#">{{$product->title}}</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price">
                                                    <span>₹{{$product->price}}</span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: {!! $product->product_details !!}</li>
                                                        <li>MFG: {{ $product->created_at->format('d M, Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> -->
                            <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                                <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                    @foreach($detaillist as $product)
                                    <div class="col">
                                        <div class="tpproduct p-relative mb-20">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="{{ asset('uploads/'. $product->image_url_1) }}" alt=""></a>
                                                <a class="tpproduct__thumb-img" href="#"><img src="{{ asset('uploads/'. $product->image_url_2) }}" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    @if($product->category_name === 'cloth')
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                    @endif
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <span>{{$product->title}}</span>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="{{route('product.detail',$product->reference)}}">{{$product->title}}</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <!-- Display rating stars -->
                                                    @for($i = 0; $i < 5; $i++) <a href="#"><i class="icon-star_outline1"></i></a>
                                                        @endfor
                                                </div>
                                                <!-- Product price -->
                                                <div class="tpproduct__price">
                                                    <span>₹{{$product->price}}</span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: {!! $product->product_details !!}</li>
                                                        <li>MFG: {{ $product->created_at->format('d M, Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade whight-product" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                                <div class="row">
                                    @foreach($detaillist as $product)
                                    <div class="col-lg-12">
                                        <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                                            <div class="tplist__product-img">
                                                <a href="#" class="tplist__product-img-one">
                                                    <img src="{{ asset('uploads/'. $product->image_url_1) }}" alt="" width="200px">
                                                </a>
                                                <a class="tplist__product-img-two" href="#">
                                                    <img src="{{ asset('uploads/'. $product->image_url_2) }}" alt="" width="200px">
                                                </a>
                                                <div class="tpproduct__info bage">
                                                    @if($product->category_name === 'cloth')
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tplist__content">
                                                <span>{{$product->title}}</span>
                                                <h4 class="tplist__content-title"><a href="#">{{$product->title}}</a></h4>
                                                <div class="tplist__rating mb-5">
                                                    @for($i = 0; $i < 5; $i++) <a href="#"><i class="icon-star_outline1"></i></a>
                                                        @endfor
                                                </div>
                                                <ul class="tplist__content-info">
                                                    <li>{!! $product->product_details !!}</li>
                                                </ul>
                                            </div>
                                            <div class="tplist__price justify-content-end">
                                                <h4 class="tplist__instock">Availability: <span>92 in stock</span> </h4>
                                                <h3 class="tplist__count mb-15">₹{{$product->price}}</h3>
                                                <button class="tp-btn-2 mb-10">Add to cart</button>
                                                <div class="tplist__shopping">
                                                    <a href="#"><i class="icon-heart icons"></i> wishlist</a>
                                                    <a href="#"><i class="icon-layers"></i> Compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> -->
                        </div>
                        <div class="basic-pagination text-center mt-35">
                            <nav>
                                <ul>
                                    <li>
                                        <span class="current">1</span>
                                    </li>
                                    <li>
                                        <a href="">2</a>
                                    </li>
                                    <li>
                                        <a href="">3</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <i class="icon-chevrons-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->

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
