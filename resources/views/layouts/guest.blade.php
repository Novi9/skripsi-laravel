<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    @include('includes.styles')

    @yield('custom_styles')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center" data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item">
                    <a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo">
                            <img style="width: 40px;margin-top: -10px;" src="{{ url('logo_mahaddd.png')}}">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">Skripsi</span>
                                    <span class="user-status">Novita Pratiwi</span>
                                </div>
                                <span>
                                    <img class="round" src="{{ url('logo_mahaddd.png')}}" alt="avatar" width="40" height="40">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <div class="row">
                    <div class="col-6 text-center">
                        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class="nav-item mr-1 {{ (request()->is('/')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item" href="{{ route('home') }}"><i class=""></i>Home</a>
                            </li>
                            <li class="nav-item mx-1 {{ (request()->is('metode')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item" href="{{ route('home-metode') }}"><i class=""></i>AHP-TOPSIS</a>
                            </li>
                            <li class="nav-item mx-1 {{ (request()->is('tentang')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item" href="{{ route('home-tentang') }}"><i class=""></i>Tentang</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav navbar-nav float-right" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item active rounded" href="{{ route('auth-login') }}"><i class=""></i>Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            @yield('content')

        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('includes.footer')

    @yield('prepend_script')

    @include('includes.scripts')

    @yield('append_script')

</body>

</html>
