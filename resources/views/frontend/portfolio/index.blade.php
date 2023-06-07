@extends('frontend.layouts.main')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2" style="background-image: url({{ asset('assets/frontend/images/resources/breadcrumb-bg-2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Our Catgories</span>
                            <h1>Bringing Great Design</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Catgories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start services style2 Service Page-->
    <section class="services-style1-service-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="sec-title">
                        <p>Categories</p>
                        <div class="title">Working <span>Sectors</span></div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="text">
                        <p>We are an Interior Designer, Who believe in excellence, quality and honesty, yes we design
                            beautiful home interiors.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(!empty($categories))
                    @foreach($categories as $key => $category)
                        <!--Start single service style2-->
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                <div class="img-holder">
                                    <img src="{{ uploaded_asset($category->banner) }}" alt="{{ $category->name }}">
                                    <div class="overlay-style-two"></div>
                                </div>
                                <div class="text-holder">
                                    <div class="icon-holder">
                                        {{-- <span class="icon-concept"></span> --}}
                                        <img src="{{ uploaded_asset($category->thumbnail_img) }}" alt="">
                                    </div>
                                    <div class="inner">
                                        <h3>{{ $category->name }}</h3>
                                        @if(!empty($category->description))
                                        <div class="text">
                                            <p>{!! \Str::limit(strip_tags($category->description), $limit = 100, $end = '...') !!}</p>
                                        </div>
                                        @endif
                                        <div class="read-more">
                                            <a class="btn-one" href="{{ route('site.category.detail', $category->slug) }}">Products in Category<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single service style2-->
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--End services style2 Service Page-->

@endsection
