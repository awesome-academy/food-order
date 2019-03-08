<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trans('setting.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/assets/css/responsive.css') }}">
    @yield('css')
</head>
<body>
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')
</body>
</html>
