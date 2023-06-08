@extends('frontend.layouts.main')

@section('content')
    <!--Main Slider-->
    <section class="main-slider style2">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                <ul>
                    @foreach ($banners as $key => $banner)
                        <li data-description="Slide Description" data-easein="default" data-easeout="default"
                            data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-index="rs-{{ 1687 + $key }}" data-masterspeed="default" data-param1=""
                            data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                            data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                            data-slotamount="default" data-thumb="{{ uploaded_asset($banner->banner) }}"
                            data-title="{{ uploaded_asset($banner->banner) }}" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                                src="{{ uploaded_asset($banner->banner) }}">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['800','800','700','400']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['-80','-95','-80','-90']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="big-title">
                                        {{ $banner->title }}
                                    </div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['800','800','700','400']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['25','0','-5','-20']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="text">{{ $banner->subtitle }}</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['800','800','700','400']"
                                data-whitespace="normal" data-hoffset="['15','15','15','15']"
                                data-voffset="['105','90','75','65']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="btn-box">
                                        <a class="html5lightbox play-button" title="crystalo Video Gallery"
                                            href="{{ $banner->video_url }}">
                                            <span class="flaticon-play-button"></span>
                                        </a>
                                        <a class="slide-style2-button" href="{{ route('site.about') }}">More About Us</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Start Featured Area-->
    <section class="featured-area">
        <div class="container">
            <div class="row">
                @foreach ($categories as $key => $category)
                    <!--Start Single Featured Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-featured-box">
                            <div class="inner clearfix">
                                <div class="img-holder">
                                    <img src="{{ uploaded_asset($category->banner) }}" alt="{{ $category->name }}">
                                </div>
                                <div class="static-content">
                                    <div class="icon">
                                        {{-- <span class="icon-architecture-and-city"></span> --}}
                                        <img src="{{ uploaded_asset($category->thumbnail_img) }}"
                                            alt="{{ $category->name }}">
                                    </div>
                                    <div class="title">
                                        <h3>{{ $category->name }}</h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="overlay-image">
                                        {{-- <img src="images/resources/featured-1-overlay.png" alt="Awesome Image"> --}}
                                    </div>
                                    <div class="icon">
                                        {{-- <span class="icon-architecture-and-city"></span> --}}
                                        <img src="{{ uploaded_asset($category->thumbnail_img) }}"
                                            alt="{{ $category->name }}">
                                    </div>
                                    <div class="title">
                                        <h3>{{ $category->name }}</h3>
                                    </div>
                                    <div class="text">
                                        <p>{!! \Str::limit(strip_tags($category->description), $limit = 90, $end = '...') !!}</p>
                                        <a class="btn-two"
                                            href="{{ route('site.category.detail', $category->slug) }}">Read More<span
                                                class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Featured Box-->
                @endforeach
            </div>
        </div>
        <div class="container about-style3-content">
            <div class="about-style3-bg banner-animate"
                style="background-image: url({{ asset('assets/frontend/images/pattern/about-style3-bg.jpg') }});"></div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/frontend/images/icon/home-1.png') }}" alt="Icon">
                        </div>
                        <p>About Our Company</p>
                        <div class="title">Creating lasting impressions through <br><span>interior design.</span></div>
                    </div>
                    <div class="button text-center">
                        <a class="btn-one" href="{{ route('site.about') }}">About Our Company<span
                                class="flaticon-next"></span></a>
                        <a class="btn-one black" href="{{ route('site.category') }}">See Our Categories<span
                                class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Featured Area-->

    <!--Start About Style2 Area-->
    {{-- <section class="about-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-style2-text">
                        <div class="sec-title">
                            <p>About Company</p>
                            <div class="title">Recognized <br>interior & exterior<br><span> designer in UAE</span>
                            </div>
                        </div>
                        <div class="text">
                            <p>
                                {{ get_setting('about_us') }}
                            </p>
                        </div>
                        <div class="button">
                            <a class="btn-one" href="{{ route('site.about') }}">More About Us<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-style2-image-box">
                        <div class="pattern wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/frontend/images/resources/about-style2-image.jpg') }}"
                                alt="Awesome Image">
                            <div class="overlay-box">
                                <div class="title">
                                    <h1>05 <span>Years Experience<br> in this Field</span></h1>
                                </div>
                                <div class="button">
                                    <a href="#"><span class="icon-back"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End About Style2 Area-->

    <!--Start Working style2 Area-->
    {{-- <section class="working-style2-area"
        style="background-image:url({{ asset('assets/frontend/images/parallax-background/working-style2-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="working-style2-content clearfix">
                        @foreach ($categories as $key => $category)
                        
                            <div class="single-working-box-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/frontend/images/resources/working-v2-1.jpg') }}"
                                        alt="{{ $category->name }}">
                                    <div class="static-content">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon-holder">
                                                    <img src="{{ uploaded_asset($category->thumbnail_img) }}"
                                                        alt="{{ $category->name }}">
                                                </div>
                                                <div class="text-holder">
                                                    <div class="title">
                                                        <h3>{{ $category->name }}</h3>
                                                        <div class="count">{{ $key + 1 }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="box">
                                            <div class="inner">
                                                
                                                <div class="text-holder">
                                                    <div class="title">
                                                        <h3>{{ $category->name }}</h3>
                                                        <div class="count">{{ $key + 1 }}</div>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ $category->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more">
                                    <a href="{{ route('site.category.detail', $category->slug) }}"><span class="icon-next"></span></a>
                                </div>
                            </div>
                            
                        @endforeach
                    </div>
                    <div class="working-style-bottom text-center">
                        <p>Wanna Work With Our Experienced Profesional Team? Make an Appointment.</p>
                        <div class="button">
                            <a class="btn-one" href="{{ route('site.category') }}">View All Catgories<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Working style2 Area-->

    <!--Start slogan style2 area-->
    <section class="slogan-style2-area"
        style="background-image:url({{ asset('assets/frontend/images/parallax-background/slogan-bg.jpg') }});">
        <div class="icon-holder">
            <span class="flaticon-car"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">
                            <h1>Creating lasting impressions through<br> <span>interior design.</span></h1>
                        </div>
                        <div class="button">
                            <a class="btn-one call-us" href="tel:+971543436980"><i class="icon-music"></i>+971 54 343
                                6980</a>
                            <a class="btn-one" href="{{ route('site.contact') }}">Contact us<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan style2 area-->

    <!--Start services style1 area-->
    <section class="services-style1-area">
        <div class="container">
            <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms"
                data-wow-duration="1200ms">
                <p>What We Do</p>
                <div class="title">Some Special <span>Products</span></div>
                <p class="bottom-text">We are an Interior Designer, Who believe in excellence, quality and honesty,
                    yes we design beautiful home interiors.</p>
            </div>
            <div class="row">
                @foreach ($products as $key => $product)
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ uploaded_asset($product->thumbnail_img) }}" alt="{{ $product->name }}">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                {{-- <span class="icon-lamp"></span> --}}
                                                <img src="{{ uploaded_asset($product->category->thumbnail_img) }}"
                                            alt="{{ $product->name }}" style="width: 60px;">
                                            </div>
                                            <div class="title">
                                                <h3>{{ $product->name }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            {{-- <span class="icon-lamp"></span> --}}
                                            <img src="{{ uploaded_asset($product->category->thumbnail_img) }}"
                                            alt="{{ $product->name }}">
                                        </div>
                                        <div class="count">
                                            <h1>{{ $key + 1 }}</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>{{ $product->name }}</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('site.products.detail', $product->slug) }}"><span
                                                    class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p></p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('site.products.detail', $product->slug) }}"><span
                                                class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                @endforeach
            </div>
        </div>
    </section>
    <!--End services style1 area-->

    <!--Start Why choose Area-->
    <section class="why-choose-area"
        style="background-image:url({{ asset('assets/frontend/images/parallax-background/why-choose-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="why-choose-title float-left">
                        <div class="sec-title">
                            <div class="icon"><img src="{{ asset('assets/frontend/images/icon/home-1.png') }}"
                                    alt="Awesome Logo"></div>
                            <div class="title">Why People <br>Choose <span>US</span></div>
                        </div>
                        <ul>
                            <li>Well Considered Design</li>
                            <li>We Create For You</li>
                            <li>Leave The Details To Us</li>
                        </ul>
                        <div class="button">
                            <a class="btn-one" href="{{ route('site.contact') }}">Make an Appointment<span
                                    class="flaticon-next"></span></a>
                        </div>
                    </div>
                    <div class="why-choose-content float-right">
                        <!--Start Single Box-->
                        <div class="single-box redbg">
                            <div class="icon-holder">
                                <span class="icon-scheme"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Experienced Team</h3>
                                <p>Righteous indignations working beguileds all demoralized that blinded our works.
                                </p>
                            </div>
                        </div>
                        <!--End Single Box-->
                        <!--Start Single Box-->
                        <div class="single-box whitebg">
                            <div class="icon-holder">
                                <span class="icon-guarantee-certificate1"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Guaranteed Works</h3>
                                <p>Have to be repudiated annoyances accepted The wise man therefore always holds.
                                </p>
                            </div>
                        </div>
                        <!--End Single Box-->
                        <!--Start Single Box-->
                        <div class="single-box whitebg">
                            <div class="icon-holder">
                                <span class="icon-hr1"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Free Consultation</h3>
                                <p>Rejects pleasures to secure other pleasures, endures pains to avoid worse.</p>
                            </div>
                        </div>
                        <!--End Single Box-->
                        <!--Start Single Box-->
                        <div class="single-box blackbg">
                            <div class="icon-holder">
                                <span class="icon-wallet1"></span>
                            </div>
                            <div class="text-holder">
                                <h3>Reasonable price</h3>
                                <p>Our power of choice is untrammelled & when nothing prevents our being able.</p>
                            </div>
                        </div>
                        <!--End Single Box-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why choose Area-->

    <!--Start Recently Project style2 Area-->
    {{-- <section class="recently-project-style2-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>Projects</p>
                <div class="title">Recently Completed <span>Works</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-carousel-v2 owl-carousel owl-theme">
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Modern Design</span>
                                    <h3>Art Family Residence</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-2.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3>Nathan Brooke House</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-3.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Traditional</span>
                                    <h3>Office Partition Walls</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->

                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Modern Design</span>
                                    <h3>Art Family Residence</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-2.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3>Nathan Brooke House</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-3.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Traditional</span>
                                    <h3>Office Partition Walls</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->

                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Modern Design</span>
                                    <h3>Art Family Residence</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-2.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Contemporary</span>
                                    <h3>Nathan Brooke House</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/projects/lat-pro-v2-3.jpg') }}"
                                    alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span>Traditional</span>
                                    <h3>Office Partition Walls</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Recently Project style2 Area-->

    <!--Start Working Process Style2 Area-->
    <section class="working-process-style2-area"
        style="background-image:url({{ asset('assets/frontend/images/parallax-background/working-process-bg-style3.jpg') }});">
        <div class="container">
            <div class="sec-title">
                <p>To Do good design</p>
                <div class="title">Our Working <span>process</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="working-process-carousel owl-carousel owl-theme">
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>01</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-productive"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Idea & Design</h3>
                                <p>Dedignation and dislike men who are beguileds & demoralized by the charms pleasue
                                    certain circumstances.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>02</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-document"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Specification</h3>
                                <p>Owing to the claims of duty or business will frequently occur that pleasures have
                                    to be repudiated and annoyances.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>03</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Execution</h3>
                                <p>Same as saying through shrinking from toil and pain. These cases are perfectly
                                    simple and easy to distinguish.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->

                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>01</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-productive"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Idea & Design</h3>
                                <p>Dedignation and dislike men who are beguileds & demoralized by the charms pleasue
                                    certain circumstances.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>02</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-document"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Specification</h3>
                                <p>Owing to the claims of duty or business will frequently occur that pleasures have
                                    to be repudiated and annoyances.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>03</h1>
                                </div>
                                <div class="icon">
                                    <span class="icon-kitchen"></span>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>Execution</h3>
                                <p>Same as saying through shrinking from toil and pain. These cases are perfectly
                                    simple and easy to distinguish.</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Working Process Style2 Area-->

    <!--Start Testimonial Style2 Area-->
    {{-- <section class="testimonial-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>Testimonials</p>
            <div class="title">Our Customer <span>Words</span></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="testimonial-style2-content">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!--Start Single Testimonial style2-->
                        <div class="single-testimonial-style2 text-center">
                            <div class="inner-content">
                                <div class="static-content">
                                    <div class="quote-icon">
                                        <span class="icon-quote3"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Your guys were great knowledgeable, well experienced, efficient and
                                            neat. A true to work with Crystalo.</p>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Z. Gartrell Wright</h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/frontend/images/testimonial/testi-style2-1.png') }}" alt="Awesome Image">
                                    </div>
                                    <div class="text-box">
                                        <p>Your guys were great knowledgeable, well experienced, efficient and
                                            neat. A true to work with Crystalo.</p>
                                        <div class="quote-icon">
                                            <span class="icon-quote3"></span>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Z. Gartrell Wright</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial style2 -->

                        <!--Start Single Testimonial style2-->
                        <div class="single-testimonial-style2 text-center">
                            <div class="inner-content">
                                <div class="static-content">
                                    <div class="quote-icon">
                                        <span class="icon-quote3"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Indignation & dislike men who are so beguiled and demoralizeds by the
                                            charms ofpleasure of the moment.</p>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Cathrine Wagner</h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/frontend/images/testimonial/testi-style2-2.png') }}" alt="Awesome Image">
                                    </div>
                                    <div class="text-box">
                                        <p>Indignation & dislike men who are so beguiled and demoralizeds by the
                                            charms ofpleasure of the moment.</p>
                                        <div class="quote-icon">
                                            <span class="icon-quote3"></span>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Cathrine Wagner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial style2 -->

                        <!--Start Single Testimonial style2-->
                        <div class="single-testimonial-style2 text-center">
                            <div class="inner-content">
                                <div class="static-content">
                                    <div class="quote-icon">
                                        <span class="icon-quote3"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Same as saying through shrinking from all pain these cases are
                                            perfectly simple easy to distinguish.</p>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Cuthbert Brain</h3>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/frontend/images/testimonial/testi-style2-3.png') }}" alt="Awesome Image">
                                    </div>
                                    <div class="text-box">
                                        <p>Same as saying through shrinking from all pain these cases are
                                            perfectly simple easy to distinguish.</p>
                                        <div class="quote-icon">
                                            <span class="icon-quote3"></span>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <h3>Cuthbert Brain</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial style2 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!--End Testimonial Style2 Area-->

    <!--Start Contact details Area-->
    <section class="contact-details-area">
        <div class="sec-title text-center">
            <p>Contact Details</p>
            <div class="title">How Can We <span>Help You?</span></div>
        </div>
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
                                                    <h3>Visit Our Office</h3>
                                                    <p>{{ get_setting('office_address') }}</p>
                                                </div>
                                            </div>
                                            <div class="single-info-box white-bg wow fadeInUp" data-wow-delay="100ms"
                                                data-wow-duration="1200ms">
                                                <div class="icon">
                                                    <span class="icon-global"></span>
                                                </div>
                                                <div class="text">
                                                    <h3>Visit Our Office</h3>
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
                                        <form class="contact-details-form" action="{{ route('site.home.query') }}"
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
                                                            placeholder="Email" required="">
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

    <!--Start Instagram Area-->
    {{-- <section class="instagram-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="instagram-title">
                        <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                        <h3>Looking for interior inspiration?<br> for your place.</h3>
                        <a class="btn-two" href="#">Follous Us On Instagram<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <ul class="instagram-items clearfix">
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-1.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-2.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-3.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-4.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-5.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{ asset('assets/frontend/images/resources/instagram-6.jpg') }}"
                                    alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Instagram Area-->
@endsection
