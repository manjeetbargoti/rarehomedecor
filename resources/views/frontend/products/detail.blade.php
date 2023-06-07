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
                            <span>{{ $product->category->name }}</span>
                            <h1>{{ $product->name }}</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('site.products') }}">Products</a></li>
                                <li class="active">{{ $product->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Single Service Area-->
    <section class="single-service-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="single-service-sidebar">
                        <!--Start Single sidebar-->
                        <div class="single-sidebar">
                            <ul class="service-pages">
                                <div class="product_page_query">
                                    <div class="title">
                                        <h3>Submit Query</h3>
                                    </div>
                                    <form action="{{ route('site.product.query') }}" method="post"
                                        class="product_page_query_form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" id="fullName" class="form-control" name="name"
                                                placeholder="Enter your full name..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email Address</label>
                                            <input type="email" id="emailAddress" class="form-control" name="email"
                                                placeholder="Enter your email..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>
                                            <input type="text" id="phoneNumber" class="form-control" name="phone"
                                                placeholder="Enter your phone..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="queryMessage">Query Message</label>
                                            <textarea id="queryMessage" class="form-control" name="query_msg" rows="4" placeholder="Enter your query..."
                                                required></textarea>
                                        </div>

                                        <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
                                        <input type="hidden" name="page_url" value="{{ request()->url() }}">
                                        <input type="hidden" name="product_id" value="{{ @$product->id }}">

                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </ul>
                        </div>
                        <!--End Single sidebar-->
                        <div class="sidebar-contact-box text-center">
                            <div class="inner-content">
                                <div class="icon-holder">
                                    <span class="icon-support1"></span>
                                </div>
                                <h3>Consult with expert &<br> Start today</h3>
                                <div class="bottom-box">
                                    <h2>{{ get_setting('admin_phone') }}</h2>
                                    <span>Email: {{ get_setting('admin_email') }}</span>
                                </div>
                                <div class="button">
                                    <a class="btn-one wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"
                                        href="{{ route('site.contact') }}">Make Appointment
                                        <span class="flaticon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Start Single sidebar-->
                        <div class="single-sidebar">
                            <ul class="service-pack-download">
                                <li class="clearfix">
                                    <a href="{{ asset($product->pdf_file) }}" target="_blank">
                                    <div class="title-holder">
                                            <span class="text-white">Download Product PDF</span>
                                    </div>
                                    <div class="icon-holder">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End Single sidebar-->
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="single-service-top">
                        <div class="single-service-image-box">
                            {{-- <img src="{{ asset('assets/frontend/images/services/service-single/single-service-1.jpg') }}" alt="{{ $product->name }}"> --}}
                            @php
                                $photos = !empty($product->photos) ? array_unique(array_filter(explode(',', $product->photos))) : null;
                                if (!empty($photos)) {
                                    $photo = @$photos[0];
                                } else {
                                    $photo = $product->thumbnail_img;
                                }
                            @endphp
                            <img src="{{ uploaded_asset($photo) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="text">
                            <h2>{{ $product->name }}</h2>
                            <div class="inner">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>

                    <div class="advantages-content">
                        <div class="row">
                            <!--Start Single Advantages Box-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="single-advantages-box">
                                    <div class="inner">
                                        <div class="static-content">
                                            <div class="icon-holder">
                                                <span class="icon-success"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Interior<br> Expertise</h3>
                                            </div>
                                        </div>
                                        <div class="overlay-text">
                                            <div class="box">
                                                <div class="inner-text">
                                                    <p>Have to accepted That is wise man of therefore always we indignation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Advantages Box-->
                            <!--Start Single Advantages Box-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="single-advantages-box">
                                    <div class="inner">
                                        <div class="static-content">
                                            <div class="icon-holder">
                                                <span class="icon-guarantee-certificate"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Guranteed<br> Work</h3>
                                            </div>
                                        </div>
                                        <div class="overlay-text">
                                            <div class="box">
                                                <div class="inner-text">
                                                    <p>Have to accepted That is wise man of therefore always we indignation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Advantages Box-->
                            <!--Start Single Advantages Box-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="single-advantages-box">
                                    <div class="inner">
                                        <div class="static-content">
                                            <div class="icon-holder">
                                                <span class="icon-hr"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Free<br> Consultation</h3>
                                            </div>
                                        </div>
                                        <div class="overlay-text">
                                            <div class="box">
                                                <div class="inner-text">
                                                    <p>Have to accepted That is wise man of therefore always we indignation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Advantages Box-->
                            <!--Start Single Advantages Box-->
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="single-advantages-box">
                                    <div class="inner">
                                        <div class="static-content">
                                            <div class="icon-holder">
                                                <span class="icon-wallet"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Reasonable<br> Price</h3>
                                            </div>
                                        </div>
                                        <div class="overlay-text">
                                            <div class="box">
                                                <div class="inner-text">
                                                    <p>Have to accepted That is wise man of therefore always we indignation.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Advantages Box-->
                        </div>
                    </div>

                    <div class="how-work-box">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="image-box">
                                    <img src="{{ uploaded_asset($product->thumbnail_img) }}" alt="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="how-works-content">
                                    <h2>How We Work</h2>
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <span>Stage 1</span>
                                                <h3>Brief & Concept</h3>
                                                <p>Production technque irrigation managment recommended nitrogen inputs.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <span>Stage 2</span>
                                                <h3>Detailed Design</h3>
                                                <p>Improving agricultural productivity in terms of quantity and quality.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick"></span>
                                            </div>
                                            <div class="text">
                                                <span>Stage 3</span>
                                                <h3>Installation</h3>
                                                <p>Minimizing the effects pests weeds, insects, pathogens, nematodes on
                                                    animal</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Single Service Area-->
@endsection
