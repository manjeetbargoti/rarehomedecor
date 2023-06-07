@extends('frontend.layouts.main')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{ asset('assets/frontend/images/resources/breadcrumb-bg-2.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Products</span>
                        <h1>Products in Category</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('site.category') }}">Category</a></li>
                            <li class="active">Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Main project area-->
<section class="main-project-area">
    <div class="container">
        {{-- <ul class="project-filter post-filter has-dynamic-filters-counter">
            <li data-filter=".filter-item" class="active"><span class="filter-text">All Projects</span></li>
            <li data-filter=".mod"><span class="filter-text">Modern</span></li>
            <li data-filter=".contem"><span class="filter-text">Contemporary</span></li>
            <li data-filter=".trad"><span class="filter-text">Traditional</span></li>
            <li data-filter=".ret"><span class="filter-text">Retreat</span></li>
        </ul> --}}
        <div class="row filter-layout masonary-layout">
            @if(!empty($products))
                @foreach($products as $key => $product)
                    <!--Start single project item-->
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem ret">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ uploaded_asset($product->thumbnail_img) }}" alt="{{ $product->name }}">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{ route('site.products.detail', $product->slug) }}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{ $category->name }}</span>
                                        <h3><a href="{{ route('site.products.detail', $product->slug) }}">{{ $product->name }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single project item-->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!--End Main project area-->

@endsection