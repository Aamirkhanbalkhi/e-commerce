@extends('layout.frontend')

@section('content')

<main>

    <!-- about-area-start -->
    <section class="about-area tpabout__inner-bg pt-175 pb-170 mb-50" data-background="{{asset('webside/assets/img/banner/Aboutbanner.jfif')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tpabout__inner text-center">
                        <h5 class="tpabout__inner-sub mb-15">About for Orfarm</h5>
                        <h3 class="tpabout__inner-title mb-35">Unique People</h3>
                        <p>Over 25 years of experience, we have crafted thousands of strategic discovery process that <br>
                            enables us to peel back the layers which enable us to understand, connect.</p>
                        <div class="tpabout__inner-btn">
                            <a href="about.html">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- about-area-start -->
    <section class="about-area pt-100 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tpabout__inner-thumb-2 p-relative mb-30">
                        <img src="{{asset('webside/assets/img/banner/aboutbanner1.jfif')}}" alt="">
                        <div class="tpabout__inner-thumb-shape d-none d-md-block">
                            <div class="tpabout__inner-thumb-shape-one">
                                <img src="{{asset('webside/assets/img/shape/tree-leaf-10.jpg')}}" alt="">
                            </div>
                            <div class="tpabout__inner-thumb-shape-two">
                                <img src="{{asset('webside/assets/img/shape/tree-leaf-10.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tpabout__inner-2 mb-30">
                        <div class="tpabout__inner-tag mb-10">
                            <span class="active">About us</span>
                            <span>Welcome to Orfarm</span>
                        </div>
                        <h3 class="tpabout__inner-title-2 mb-25">We Help Your <br> Digital Business Grow</h3>
                        <p>We provide digital experience services to startups and small businesses. We help our <br>
                            clients succeed by creating brand identities, digital experiences, and print materials. Sed <br>
                            trspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        <div class="tpabout__inner-list">
                            <ul>
                                <li><i class="icon-check"></i> Track your daily activity.</li>
                                <li><i class="icon-check"></i> Start a private group video call.</li>
                                <li><i class="icon-check"></i> All the lorem ipsum generators on the Internet.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- about-area-start -->
    <section class="about-area pb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tpabout__item text-center mb-40">
                        <div class="tpabout__icon mb-15">
                            <img src="{{asset('webside/assets/img/icon/about-svg1.svg')}}" alt="">
                        </div>
                        <div class="tpabout__content">
                            <h4 class="tpabout__title">Select Your Products</h4>
                            <p>Choose from select produce to start. <br> Keep, add, or remove items.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tpabout__item text-center mb-40">
                        <div class="tpabout__icon mb-15">
                            <img src="{{asset('webside/assets/img/icon/about-svg2.svg')}}" alt="">
                        </div>
                        <div class="tpabout__content">
                            <h4 class="tpabout__title">Our Shop Orfarm </h4>
                            <p>We provide 100+ products, provide <br> enough nutrition for your family.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tpabout__item text-center mb-40">
                        <div class="tpabout__icon mb-15">
                            <img src="{{asset('webside/assets/img/icon/about-svg3.svg')}}" alt="">
                        </div>
                        <div class="tpabout__content">
                            <h4 class="tpabout__title">Delivery To Your </h4>
                            <p>Delivery to your door. Up to 100km <br> and it's completely free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- img-box-area-start -->
    <section class="img-box-area grey-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="tpsection mb-35">
                        <h4 class="tpsection__sub-title">~ Why Choose Us ~</h4>
                        <h4 class="tpsection__title">Our Amazing Work</h4>
                        <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-box__wrapper text-center mb-30">
                        <div class="img-box__thumb mb-30">
                            <img src="{{asset('webside/assets/img/about/about1.jfif')}}" alt="">
                        </div>
                        <div class="img-box__content">
                            <h4 class="img-box__title mb-10">Who We Are</h4>
                            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore
                                <br> et dolore dignissimos cumque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-box__wrapper text-center mb-30">
                        <div class="img-box__thumb mb-30">
                            <img src="{{asset('webside/assets/img/about/about2.jfif')}}" alt="">
                        </div>
                        <div class="img-box__content">
                            <h4 class="img-box__title mb-10">Our Products</h4>
                            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore
                                <br> et dolore dignissimos cumque.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="img-box__wrapper text-center mb-30">
                        <div class="img-box__thumb mb-30">
                            <img src="{{asset('webside/assets/img/about/about3.jfif')}}" alt="">
                        </div>
                        <div class="img-box__content">
                            <h4 class="img-box__title mb-10">How We Work</h4>
                            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit, sed do eiusmod tempor labore
                                <br> et dolore dignissimos cumque.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- img-box-area-end -->

    <!-- feature-area-start -->
    <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="{{asset('webside/assets/img/shape/footer-shape-1.svg')}}">
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
