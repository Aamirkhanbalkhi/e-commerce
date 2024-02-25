<!-- footer-area-start -->
<footer>
    <div class="tpfooter__area theme-bg-2 pt-55 footer-border">
        <div class="tpfooter__top pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="tpfooter__widget footer-col-1 mb-50">
                            <h4 class="tpfooter__widget-title">Let Us Help You</h4>
                            <p>If you have any question, <br> contact us at:
                                abc@example.com
                            </p>
                            <div class="tpfooter__widget-social mt-45">
                                <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="tpfooter__widget footer-col-2 mb-50">
                            <h4 class="tpfooter__widget-title">Looking for Orfarm?</h4>
                            <p>68 St. Vicent Place, Glasgow, <br> Newyork NH2012, UK.</p>
                            <div class="tpfooter__widget-time-info mt-35">
                                <br>
                                <span>Monday – Friday: <b>8:10 AM – 6:10 PM</b></span>
                                <span>Saturday: <b>10:10 AM – 06:10 PM</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                        <div class="tpfooter__widget footer-col-3 mb-50">
                            <h4 class="tpfooter__widget-title">HOT CATEGORIES</h4>
                            <div class="tpfooter__widget-links">
                                <ul>
                                    <li><a href="{{route('home.page')}}">Home</a></li>
                                    <li><a href="{{route('about.page')}}">About Us</a></li>
                                    <li><a href="{{route('contact.page')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                        <div class="tpfooter__widget footer-col-4 mb-50">
                            <h4 class="tpfooter__widget-title">Our newsletter</h4>
                            <div class="tpfooter__widget-newsletter">
                                <p>Subscribe to the Orfarm mailing list to receive updates <br> on new arrivals & other
                                    information.</p>
                                <form action="index.html">
                                    <span><i><img src="assets/img/shape/message-1.svg" alt=""></i></span>
                                    <input type="email" placeholder="Your email address...">
                                    <button class="tpfooter__widget-newsletter-submit tp-news-btn">Subscribe</button>
                                </form>
                                <div class="tpfooter__widget-newsletter-check mt-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I accept terms & conditions & privacy policy.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpfooter___bottom pt-40 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="tpfooter__copyright">
                            <span class="tpfooter__copyright-text">Copyright © <a href="#">ORFARM</a> all rights reserved.
                                Powered by <a href="#">ThemePure</a>.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="tpfooter__copyright-thumb text-end">
                            <img src="{{asset('webside/assets/img/shape/footer-payment.png')}} " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<!-- JS here -->
<script>
    ClassicEditor
        .create(document.querySelector('#CKeditor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
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
<script src="{{asset('webside/assets/js/grand-total.js')}}"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

</body>

</html>
