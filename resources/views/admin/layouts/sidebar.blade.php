<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="my-2" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.category.list') }}" class="nav-link {{ request()->routeIs('admin.category.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.product.list') }}" class="nav-link {{ request()->routeIs('admin.product.*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.banner.*') ? 'menu-open' : '' }}">
                    <a href="javascript:void()" class="nav-link {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Website
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.banner.list') }}" class="nav-link {{ request()->routeIs('admin.banner.*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banners</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Testimonials</p>
                            </a>
                        </li>

                        <li class="nav-item" class="nav-link {{ request()->routeIs('admin.page.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.page.list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pages</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.settings.*') ? 'menu-open' : '' }}">
                    <a href="javascript:void()" class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.general') }}" class="nav-link {{ request()->routeIs('admin.settings.general') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.settings.social') }}" class="nav-link {{ request()->routeIs('admin.settings.social') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Social Setting</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.settings.footer') }}" class="nav-link {{ request()->routeIs('admin.settings.footer') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Footer Setting</p>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{ route('admin.settings.website') }}" class="nav-link {{ request()->routeIs('admin.settings.website') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Website Setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.enquiry.*') ? 'menu-open' : '' }}">
                    <a href="javascript:void()" class="nav-link {{ request()->routeIs('admin.enquiry.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                            Enquiry
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.product.list') }}" class="nav-link {{ request()->routeIs('admin.enquiry.product.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Enquiry</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.enquiry.contact.list') }}" class="nav-link {{ request()->routeIs('admin.enquiry.contact.list') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
