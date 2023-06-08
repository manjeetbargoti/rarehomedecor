@extends('frontend.layouts.main')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/frontend/images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Terms & Conditions</h1>
                    </div>
                    <div class="breadcrumb-menu float-right">
                        <ul class="clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Terms & Conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Team Area-->
<section class="team-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                {!! $terms->description !!}
            </div>
        </div>
    </div>
</section>
<!--End Team Area-->


@endsection