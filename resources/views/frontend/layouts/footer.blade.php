<!--Start footer area Style4-->
<footer class="footer-area style4">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="single-footer-widget marbtm50-s4">
                    <div class="our-info-box">
                        <div class="footer-logo">
                            <a href="index-2.html">
                                <img src="{{ asset('assets/frontend/images/footer/footer-logo.png') }}" alt="Awesome Logo">
                            </a>
                        </div>
                        <div class="text">
                            <p class="text-justify">{{ get_setting('about_us') }}</p>
                        </div>
                        <div class="follow-us-social-links clearfix">
                            <span>Follw Us On:</span>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="single-footer-widget s4">
                    <div class="title-style2">
                        <h3>Usefull Links</h3>
                    </div>
                    <div class="usefull-links">
                        <ul class="float-left">
                            <li><a href="{{ route('site.about') }}">About us</a></li>
                            <li><a href="{{ route('site.category') }}">Categories</a></li>
                            <li><a href="{{ route('site.products') }}">Products</a></li>
                        </ul>
                        <ul class="float-left borders-left">
                            <li><a href="{{ route('site.terms') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('site.privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('site.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                <div class="single-footer-widget pdtop50-s4">
                    <div class="title-style2">
                        <h3>Subscribe Us</h3>
                    </div>
                    <div class="subscribe-box">
                        <form class="subscribe-form" action="#">
                            <input type="email" name="email" placeholder="Your Email">
                            <button class="btn-one" type="submit">Subscribe<span
                                    class="flaticon-next"></span></button>
                        </form>
                        <div class="text">
                            <p><span>*</span>Subscribe us and get latest news and updates</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area style4-->

<!--Start Footer Contact Info Area-->
<section class="footer-contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="footer-contact-info clearfix">
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-global"></span>
                                </div>
                                <div class="text">
                                    <p>{{ get_setting('office_address') }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-support1"></span>
                                </div>
                                <div class="text">
                                    <p>{{ get_setting('admin_phone') }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-footer-contact-info">
                            <div class="inner">
                                <div class="icon">
                                    <span class="icon-shipping-and-delivery"></span>
                                </div>
                                <div class="text">
                                    <p>{{ get_setting('admin_email') }}</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Footer Contact Info Area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area style3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="copyright-text text-center">
                    <p>Copyright &copy; 2023 {{ config('app.name') }}. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->