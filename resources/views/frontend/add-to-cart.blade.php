@extends('layout.frontend')

@section('content')

<head>
        {{-- AJAX k liyen csrf-token --}}
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

</head>
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
                    <form action="{{ route('update.Quantity')}}" method="POST">
                        @csrf

                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Images</th>
                                        <th>Product's Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cartitems as $item)
                                    <tr class="product-row">
                                        <td class="product-thumbnail">
                                            <img src="{{ asset('uploads/'. $item->product->image_url_1) }}" alt="">
                                        </td>
                                        <td class="product-name">
                                            <span> {{$item->product->product_name}} </span>
                                        </td>
                                        <td class="price">
                                            <span class="price fw-bold">
                                                <i class="fas fa-rupee-sign"></i>
                                                {{$item->product->price}}
                                            </span>
                                        </td>

                                        <td class="product-quantity">
                                            <button id="cart-minus" type="button" data-product-id="{{ $item->id }}">-</button>
                                            <input class="cart-input" type="text" value="1" style="text-align: center;" name="quantity">
                                            <button id="cart-plus" type="button" data-product-id="{{ $item->id }}">+</button>
                                        </td>

                                        <td class="product-subtotal">
                                            <i class="fas fa-rupee-sign"></i>
                                            <span class="amount" data-product-price="{{ $item->product->price }}">{{ $item->product->price }}</span>
                                        </td>

                                        <td class="product-remove">
                                            <a href="{{ route('removeToCart', $item->id) }}" onclick="return confirm('Are You sure you want to Delete Cart ?');">
                                                <i class="fa fa-trash text-black"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                <ul class="mb-20">
                                    <li><b>Grand Total</b><span class="total">
                                        <i class="fas fa-rupee-sign"></i>
                                    <span id="total-amount">0.00</span>
                                    <input type="text" id="grand-total-input" class="grand_total" value="1">
                                    </span></li>
                                </ul>
                                    <a href="{{ route('check.product') }}" class="tp-btn tp-color-btn banner-animation">Proceed to
                                    Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cart area end-->

        {{-- JS Code --}}

        <script>
            // Get necessary elements using IDs
            const cartInputs = document.querySelectorAll('.cart-input');
            const cartMinusBtns = document.querySelectorAll('#cart-minus');
            const cartPlusBtns = document.querySelectorAll('#cart-plus');
            const amountSpans = document.querySelectorAll('.amount');
            const totalSpan = document.querySelector('.total');
            const totalAmountSpan = document.getElementById('total-amount');

            // Function to update total
            function updateTotal() {
                let subtotal = 0;
                // Calculate subtotal for each item
                amountSpans.forEach(function(span, index) {
                    let productPrice = parseFloat(span.getAttribute('data-product-price') || 0);
                    let quantity = parseInt(cartInputs[index].value);
                    let totalPerItem = productPrice * quantity;
                    span.textContent = totalPerItem.toFixed(2); // Update amount span's value
                    subtotal += totalPerItem;
                });
                // Update total value
                totalSpan.innerHTML = '<i class="fas fa-rupee-sign"></i> ' + subtotal.toFixed(2);

                // Update grand total
                totalAmountSpan.textContent = subtotal.toFixed(2);
            }

            // Add event listeners for each item
            cartPlusBtns.forEach(function(btn, index) {
                btn.addEventListener('click', function() {
                    let currentQuantity = parseInt(cartInputs[index].value);
                    cartInputs[index].value = currentQuantity + 1; // Increment quantity by 1
                    updateTotal(); // Update total after changing quantity


                /*  AJAX Request Bhejna  */

                let productId = btn.getAttribute('data-product-id');
                let url = '/updateQuantity';        //  AJAX request ko bhejne wale URL ko set karta hai.
                let params = 'product_id=' + productId + '&quantity=' + (currentQuantity + 1); // parameters ko construct karta hai jo AJAX request ke saath bheje jayenge.

                console.log(params);

                // CSRF token ko retrieve karta hai. Ye token CSRF protection ke liye zaroori hota hai jab AJAX ke zariye forms submit kiya jaata hai.
                let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                //XMLHttpRequest object ka ek naya instance banata hai, jo browser se HTTP requests bhejne ke liye istemal hota hai.
                let xhr = new XMLHttpRequest();
                xhr.open('POST', url, true);    //request ko initialize karta hai. Isme HTTP method ('POST'), URL (url) aur request ko asynchronous banata hai (true).
                xhr.setRequestHeader('X-CSRF-Token', csrfToken);  // CSRF protection ke liye zaroori hai.
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                //Ye code block ek event handler define karta hai jo XMLHttpRequest ka readyState badalne par chalaya jayega.
                //Function dekhta hai ki kya request complete hai (readyState == 4) aur agar response status 200 (successful) hai toh,
                //woh response text ko console mein log karta hai.
                xhr.onreadystatechange = function(){
                    if(xhr.readyState == 4 && xhr.status == 200){
                        console.log(xhr.responseText);
                    }
                };
                    //Ye line AJAX request ko server par specified parameters ke saath bhejta hai (params).
                    // Request body mein data hota hai jo server ko process karne ke liye bheja jata hai.
                    xhr.send(params);
                });
            });

            cartMinusBtns.forEach(function(btn, index) {
                btn.addEventListener('click', function() {
                    let currentQuantity = parseInt(cartInputs[index].value);
                    if (currentQuantity > 1) {
                        cartInputs[index].value = currentQuantity - 1; // Decrement quantity by 1
                        updateTotal(); // Update total after changing quantity

                    /*  AJAX Request Bhejna */

                    let productId = btn.getAttribute('data-product-id');
                    let url = '/updateQuantity';
                    let params = 'product_id=' + productId + '&quantity=' + (currentQuantity - 1);

                    let csrfToken = document.querySelector('meta[name=csrf-token]').getAttribute('content');

                    let xhr = new XMLHttpRequest();
                    xhr.open('POST', url, true);
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function(){
                        if(xhr.readyState == 4 && xhr.status == 200){
                            console.log(xhr.responseText);
                        }
                    };
                        xhr.send(params);
                    }
                });
            });

            cartInputs.forEach(function(input, index) {
                input.addEventListener('change', function() {
                    updateTotal(); // Update total after changing quantity
                });
            });

            // Initial update of total when the page loads
            updateTotal();
    </script>

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

