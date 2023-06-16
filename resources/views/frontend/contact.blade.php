@extends('frontend.layouts.main')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2"
        style="background-image: url({{ asset('assets/frontend/images/resources/breadcrumb-bg-2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Contact Details</span>
                            <h1>How Can We Help You?</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Contact details Area-->
    <section class="contact-details-area">
        <div class="parallax-background"
            style="background-image:url({{ asset('assets/frontend/images/parallax-background/contact-details-bg.html') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-details-content">

                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="content-info-box"
                                    style="background-image:url({{ asset('assets/frontend/images/parallax-background/contact-info-box-bg.jpg') }});">
                                    <div class="inner-content">
                                        <div class="inner">
                                            <div class="single-info-box wow fadeInDown" data-wow-delay="100ms"
                                                data-wow-duration="1200ms">
                                                <div class="icon">
                                                    <span class="icon-global"></span>
                                                </div>
                                                <div class="text">
                                                    <h3></h3>
                                                    <p>{{ get_setting('office_address') }}</p>
                                                </div>
                                            </div>
                                            <div class="single-info-box white-bg wow fadeInUp" data-wow-delay="100ms"
                                                data-wow-duration="1200ms">
                                                <div class="icon">
                                                    <span class="icon-global"></span>
                                                </div>
                                                <div class="text">
                                                    <h3></h3>
                                                    <p>{{ get_setting('office_address') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="contact-details-form-box">
                                    <div class="title-box">
                                        <h2>Request for<br> Approximate Estimation</h2>
                                    </div>
                                    <div class="contact-details-box">
                                        <form class="contact-details-form" action="{{ route('site.contact.query') }}"
                                            method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="single-box">
                                                        <input type="text" name="name" value=""
                                                            placeholder="Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="single-box">
                                                        <input type="email" name="email" value=""
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="single-box">
                                                        <input type="text" name="phone" value=""
                                                            placeholder="Phone" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="single-box">
                                                        <textarea name="query_msg" placeholder="Write your query here..." required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
                                            <input type="hidden" name="page_url" value="{{ request()->url() }}">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="single-box">
                                                        <button class="btn-one" type="submit">Send Request<span
                                                                class="flaticon-next"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact details Area-->
@endsection
