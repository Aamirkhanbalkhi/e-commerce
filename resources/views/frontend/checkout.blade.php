

@extends('layout.frontend')

@section('content')

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area pb-2">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="tp-breadcrumb__content">
                    <div class="tp-breadcrumb__list">
                       <span class="tp-breadcrumb__active"><a href="{{ route('home.page')}}">Home</a></span>
                       <span class="dvdr">/</span>
                       <span>Checkout</span>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- breadcrumb-area-end -->

     <!-- coupon-area start -->
     <section class="coupon-area">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                       <div class="coupon-info">
                          <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                             sit amet ipsum luctus.</p>
                          <form action="#">
                             <p class="form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text">
                             </p>
                             <p class="form-row-last">
                                <label>Password <span class="required">*</span></label>
                                <input type="text">
                             </p>
                             <p class="form-row">
                                <button class="tp-btn tp-color-btn" type="submit">Login</button>
                                <label>
                                   <input type="checkbox">
                                   Remember me
                                </label>
                             </p>
                             <p class="lost-password">
                                <a href="#">Lost your password?</a>
                             </p>
                          </form>
                       </div>
                    </div>
                    <!-- ACCORDION END -->
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                       <div class="coupon-info">
                          <form action="#">
                             <p class="checkout-coupon">
                                <input type="text" placeholder="Coupon Code">
                                <button class="tp-btn tp-color-btn" type="submit">Apply Coupon</button>
                             </p>
                          </form>
                       </div>
                    </div>
                    <!-- ACCORDION END -->
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- coupon-area end -->

     <!-- checkout-area start -->
     <section class="checkout-area pb-50">
        <div class="container">

           <form action="{{ route('addbilling')}}" method="post">
            @csrf

              <div class="row">
                 <div class="col-lg-6 col-md-12">
                    <div class="checkbox-form">

                        @include('Includes.Admin.alert')

                       <h3>Billing Details</h3>
                       <div class="row">
                          <div class="col-md-12">
                             <div class="checkout-form-list">
                                <label> Name <span class="required">*</span></label>
                                <input type="text" placeholder="Name" id="example-input-large" class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                             </div>
                          </div>
                          <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>Email Address <span class="required">*</span></label>
                               <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email">
                               @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>Phone <span class="required">*</span></label>
                               <input type="text" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" name="phone">
                               @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                            </div>
                         </div>
                          <div class="col-md-12">
                            <div class="checkout-form-list">
                               <label>Address <span class="required">*</span></label>
                               <input type="text" placeholder="Street address" class="form-control @error('address') is-invalid @enderror" name="address">
                               @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                            </div>
                         </div>
                          <div class="col-md-12">
                             <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" placeholder="Town / City" class="form-control @error('city') is-invalid @enderror" name="city">
                                @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                             </div>
                          </div>
                          <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label> Zip Code <span class="required">*</span></label>
                               <input type="text" placeholder="Zip Code" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code">
                               @error('zip_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                            </div>
                         </div>
                          <div class="col-md-6">
                             <div class="checkout-form-list">
                                <label>State / County <span class="required">*</span></label>
                                <input type="text" placeholder="State / Country" class="form-control @error('state_country') is-invalid @enderror" name="state_country">
                                @error('state_country')
                                <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                             </div>
                          </div>

                          <div class="col-md-6">
                             <div class="checkout-form-list">
                                <button class="tp-btn tp-color-btn tp-wish-cart banner-animation" type="submit">
                                Save</button>
                             </div>
                          </div>

                        </form>

                          <div class="col-md-12">
                             <div class="checkout-form-list create-acc">
                                <input id="cbox" type="checkbox">
                                <label>Create an account?</label>
                             </div>
                             <div id="cbox_info" class="checkout-form-list create-account">
                                <p>Create an account by entering the information below. If you are a returning
                                   customer please login at the top of the page.</p>
                                <label>Account password <span class="required">*</span></label>
                                <input type="password" placeholder="password">
                             </div>
                          </div>
                       </div>
                       <div class="different-address">
                          <div class="order-notes">
                             <div class="checkout-form-list">
                                <label>Order Notes</label>
                                <textarea id="checkout-mess" cols="30" rows="10"
                                   placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-12">
                    <div class="your-order mb-10 ">

                        <h3>Your order</h3>
                            <div class="checkout-form-list">
                                <button class="tp-btn tp-color-btn tp-wish-cart" type="button">
                                Change Activity</button>
                            </div>
                            {{-- <span>Your Previous Address</span> --}}

                       <div class="your-order-table table-responsive">
                          <table>
                             <thead>
                                <tr>
                                    @php
                                        $totalprice = 0;
                                    @endphp

                                    @foreach ($productshow as $product)
                                            <div>
                                                <p><b>Product Name:</b> {{ $product->product_name }}</p>
                                                <p>Quantity: {{ $product->quantity }}</p>
                                                <p>Total Price: {{ $product->updated_price }}</p>
                                            </div>

                                            @php
                                                $totalprice += $product->updated_price;
                                            @endphp
                                    @endforeach
                                </tr>
                             </thead>
                             <tfoot>

                                <tr class="order-total">
                                <strong>
                                        <th><big><b>Order Total</b></big></th>
                                <td>
                                       <i class="fas fa-rupee-sign"></i>
                                    <span>{{ $totalprice }}</span>
                                </td>
                                </strong>
                                </tr>
                             </tfoot>
                          </table>
                       </div>

                       <div class="payment-method">
                          <div class="accordion" id="checkoutAccordion">
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="checkoutOne">
                                   <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                      Direct Bank Transfer
                                   </button>
                                </h2>
                                <div id="bankOne" class="accordion-collapse collapse show"
                                   aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                   <div class="accordion-body">
                                      Make your payment directly into our bank account. Please use your Order ID as the
                                      payment reference. Your order won’t be shipped until the funds have cleared in
                                      our account.
                                   </div>
                                </div>
                             </div>
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="paymentTwo">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                      Cheque Payment
                                   </button>
                                </h2>
                                <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo"
                                   data-bs-parent="#checkoutAccordion">
                                   <div class="accordion-body">
                                      Please send your cheque to Store Name, Store Street, Store Town, Store
                                      State / County, Store
                                      Postcode.
                                   </div>
                                </div>
                             </div>
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="paypalThree">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                      PayPal
                                   </button>
                                </h2>
                                <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree"
                                   data-bs-parent="#checkoutAccordion">
                                   <div class="accordion-body">
                                      Pay via PayPal; you can pay with your credit card if you don’t have a
                                      PayPal account.
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="order-button-payment mt-20">
                             <a href="{{ route('addorder') }}"><button type="button" class="tp-btn tp-color-btn w-100 banner-animation">Place
                                order</button></a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           {{-- </form> --}}
        </div>
     </section>
     <!-- checkout-area end -->


@endsection
