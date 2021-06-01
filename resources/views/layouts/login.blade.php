<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Nutrifood">
    <meta name="keywords" content="Nutrifood">
    <meta name="author" content="Nutrifood">
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" href="{{ url('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/pages/authentication.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">


</head>

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    @yield('content')

    <script src="{{ url('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ url('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('app-assets/js/core/app.js') }}"></script>
    <script src="{{ url('app-assets/js/scripts/components.js') }}"></script>

</body>

</html>
