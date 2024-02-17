@extends('layout.frontend')

@section('content')

<main>

    <!-- slider-area-start -->
    <section class="slider-area tpslider__home-3 tpslider-delay grey-bg slider-three">
        <div class="swiper-container slider-active">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <div class="tpslider grey-bg">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7 mt-5">
                                    <div class="tpslider__content slider-three-content text-center">
                                        <span class="tpslider__sub-title my-25">{{$banner->title}}</span>
                                        <h2 class="tpslider__title my-25">{{$banner->heading}}</h2>
                                        <p class="my-25">{{$banner->decs}}</p>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                    <div class="tpslider__thumb p-relative">
                                        <img class="tpslider__thumb-img tpslider__three" src="{{asset('uploads/'. $banner->image)}}" alt="slider-bg">
                                        <!-- <div class="tpslider__shape d-none d-lg-block">
                                            <img class="tpslider__shape-three three-shap-one" src="{{asset('webside/assets/img/slider/1.png')}}" width="80px" alt="shape">
                                            <img class=" three-shap-two" src="{{asset('webside/assets/img/slider/2.png')}}" width="80px" alt="shape">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tpslider__arrow d-none  d-xxl-block">
                <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
                <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- feature-area-start -->
    <section class="feature-area whight-feature grey-bg feature-top">
        <div class="container">
            <div class="feature-bg-round white-bg pt-50 pb-15">
                <div class="tpfeature-border">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1">
                        <div class="col">
                            <div class="mainfeature__item text-center mb-45">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('webside/assets/img/icon/feature-icon-6.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Fast Delivery</h4>
                                    <p>Across West & East India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-45">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('webside/assets/img/icon/feature-icon-7.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">safe payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-45">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('webside/assets/img/icon/feature-icon-8.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Online Discount</h4>
                                    <p>Add Multi-buy Discount </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-45">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('webside/assets/img/icon/feature-icon-9.svg')}}" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Help Center</h4>
                                    <p>Dedicated 24/7 Support </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-45">
                                <div class="mainfeature__icon">
                                    <img src="{{asset('webside/assets/img/icon/feature-icon-10.svg')}}" alt="">
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
        </div>
    </section>
    <!-- feature-area-end -->

    <!-- product-area-start -->
    @foreach($categoryProducts as $categoryName => $products)
    <section class="weekly-product-area grey-bg whight-product">
        <div class="container">
            <div class="sections__wrapper white-bg pr-50 pl-50">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <div class="tpsection mb-15">
                            <h4 class="tpsection__title text-start brand-product-title">{{ $categoryName }} Products</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tpproduct__all-item">
                            @if($products->isNotEmpty())
                            <a href="{{route('product.list', ['categoryName' => $products->first()->category_slug])}}">View All <i class="icon-chevron-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpnavtab__area pb-40">
                            <div class="tpproduct__arrow p-relative">
                                <div class="swiper-container tpproduct-active-2 tpslider-bottom p-relative">
                                    <div class="swiper-wrapper">
                                        @foreach($products as $product)
                                        <div class="swiper-slide">
                                            <div class="tpproduct p-relative tpprogress__hover">
                                                <div class="tpproduct__thumb p-relative text-center">
                                                    <a href="{{route('product.detail')}}"><img src="{{ asset('uploads/' . $product->image_url_1) }}" alt=""></a>
                                                    <a class="tpproduct__thumb-img" href="{{route('product.detail',$product->reference)}}"><img src="{{ asset('uploads/' . $product->image_url_2) }}" alt=""></a>
                                                    <!-- Other product details -->
                                                </div>
                                                <div class="tpproduct__content">
                                                    <a href="{{route('product.detail',$product->reference)}}">{{ $product->product_name }}</a>
                                                    <h4 class="tpproduct__title">
                                                        <a href="{{route('product.detail',$product->reference)}}">{{ $product->title }}</a>
                                                    </h4>
                                                    <div class="tpproduct__rating mb-5">
                                                        <!-- You can place rating stars here -->
                                                    </div>
                                                    <div class="tpproduct__price mb-5">
                                                        <span>₹{{ $product->price }}</span>
                                                    </div>
                                                    <div class="tpproduct__progress">
                                                        @if ($product->status === 'In Stock')
                                                        Status: <span class="text-success">In Stock</span>
                                                        @elseif ($product->status === 'Out of Stock')
                                                        Status: <span class="text-danger">Out of Stock</span>
                                                        @elseif ($product->status === 'Coming Soon')
                                                        Status: <span class="text-warning">{{ $product->status }}</span>
                                                        @else
                                                        <!-- <span>Status: {{ $product->status }}</span> -->
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="tpproduct__hover-text">
                                                    <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                        <a class="tp-btn-2" href="#">Add to cart</a>
                                                    </div>
                                                    <div class="tpproduct__descrip">
                                                        <ul>
                                                            <li>Type: {!! $product->product_details !!}</li>
                                                            <li>MFG: {{ $product->created_at->format('d M, Y') }}</li>
                                                            <!-- Adjust the date format as needed -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- product-area-end -->


</main>


@endsection