@php
    $categories = \App\Category::where(['status' => 1, 'parent_id' => 0])->get();
@endphp

<!-- Start Top Bar style2 -->
<section class="top-bar-style2">
    <div class="top-style2 clearfix">
        <div class="top-style2-left">
            <p><span class="icon-music"></span>We have Answers</p>
            <ul>
                <li>{{ get_setting('admin_phone') }}</li>
                <li>{{ get_setting('admin_email') }}</li>
            </ul>
        </div>
        <div class="top-style2-right">
            <ul class="topbar-social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Top Bar style2 -->

<!--Start Main Header-->
<header class="main-header header-style2 stricky">
    <div class="inner-container clearfix">
        <div class="logo-box-style2 float-left">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/frontend/images/resources/logo.png') }}" alt="Awesome Logo">
            </a>
        </div>
        <div class="main-menu-box float-right">
            <nav class="main-menu style2 clearfix">
                <div class="navbar-header clearfix">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ request()->routeIs('site.about') ? 'current' : '' }}"><a href="{{ route('site.about') }}">About us</a></li>
                        <li class="dropdown {{ request()->routeIs('site.category.*') ? 'current' : '' }}"><a href="{{ route('site.category') }}">Category</a>
                            <ul>
                                @foreach($categories as $key => $category)
                                    @php
                                        $sub_categories = \App\Category::where(['parent_id' => $category->id, 'status' => 1])->get();
                                    @endphp
                                <li class="{{ !empty($sub_categories) ? 'dropdown' : '' }}"><a href="{{ route('site.category.detail', $category->slug) }}">{{ $category->name }}</a>
                                    @if(!empty($sub_categories))
                                        <ul class="sub-dropdown">
                                            @foreach($sub_categories as $key => $subCat)
                                            <li><a href="{{ route('site.category.detail', $subCat->slug) }}">{{ $subCat->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('site.products.*') ? 'current' : '' }}"><a href="{{ route('site.products') }}">Products</a></li>
                        <li class="{{ request()->routeIs('site.contact') ? 'current' : '' }}"><a href="{{ route('site.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--End Main Header-->