@extends('frontend.layouts.main')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/frontend/images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Talented Interior<br> Designer.</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Company Overview Area-->
{{-- <section class="company-overview-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="intro-box clearfix">
                    <div class="sec-title">
                        <p>Company Overview</p>
                        <div class="title">Modern & Luxury<br> <span>Interior Designers in USA</span></div>
                    </div>
                    <div class="text">
                        <p>We feel that interior design is one of the most important investments you will ever make. Whether your needs are Residential or Commercial Interior Design or Model Home Merchandising, our commitment to your project.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="history-content-box clearfix">
                    <div class="history-carousel owl-carousel owl-theme">
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('assets/frontend/images/resources/history-1.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>1983</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Crystalo Was Founded by<br> Chris Miller in USA.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee shrinking from toil and pain.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('assets/frontend/images/resources/history-2.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>1984</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Crystalo Was Founded by<br> Chris Miller in USA.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee shrinking from toil and pain.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('assets/frontend/images/resources/history-1.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>1985</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Crystalo Was Founded by<br> Chris Miller in USA.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee shrinking from toil and pain.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('assets/frontend/images/resources/history-2.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>1986</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Crystalo Was Founded by<br> Chris Miller in USA.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee shrinking from toil and pain.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('assets/frontend/images/resources/history-2.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">
                                    <div class="date">
                                        <h3>1987</h3>
                                    </div>
                                    <div class="title">
                                        <h3>Crystalo Was Founded by<br> Chris Miller in USA.</h3>
                                    </div>
                                    <div class="text">
                                        <p>Indignation and dislike men who are so beguiled and demoralized by the charms pleasure of the moment, so blinded by desire, that they cannot foresee shrinking from toil and pain.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row fact-counter">
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-fact-counter wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="count-box">
                        <h1>
                            <span class="timer" data-from="1" data-to="36" data-speed="5000" data-refresh-interval="50">36</span>
                        </h1>
                    </div>
                    <div class="title">
                        <h3>Years of<br> Experience</h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-fact-counter wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="count-box">
                        <h1>
                            <span class="timer" data-from="1" data-to="5" data-speed="5000" data-refresh-interval="50">5</span>
                            <img src="{{ asset('assets/frontend/images/icon/k.png') }}" alt="">
                        </h1>
                    </div>
                    <div class="title">
                        <h3>Projects<br> Completed</h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-fact-counter wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="count-box">
                        <h1>
                            <span class="timer" data-from="1" data-to="24" data-speed="5000" data-refresh-interval="50">24</span>
                        </h1>
                    </div>
                    <div class="title">
                        <h3>Branches<br> Worldwide</h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="single-fact-counter wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="count-box">
                        <h1>
                            <span class="timer" data-from="1" data-to="47" data-speed="5000" data-refresh-interval="50">47</span>
                        </h1>
                    </div>
                    <div class="title">
                        <h3>Awards<br> Holds in Hand</h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
        </div>

    </div>
</section> --}}
<!--End Company Overview Area-->


<!--Start Team Area-->
<section class="team-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                {!! $about->description !!}
            </div>
        </div>
    </div>
</section>
<!--End Team Area-->


@endsection