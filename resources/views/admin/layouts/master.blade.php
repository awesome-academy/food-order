<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Food Order</title>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/source/backend/admin/crown/css/main.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/source/backend/admin/css/css.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/source/backend/admin/css/error.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/source/backend/admin/css/jquery-confirm.min.css') }}" />
    </head>
<body>
    @include('admin.layouts.sidebar')
    <div id="rightSide">
    <div class="topNav">
        @include('admin.layouts.header')
    </div>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>{{ trans('setting.dashboard') }}</h5>
                <span>{{ trans('setting.managepage') }}</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
        @yield('content')
    <div class="clear mt30"></div>
        @include('admin.layouts.footer')
    </div>
    <div class="clear"></div>
</body>
    <script type="text/javascript" src="{{ asset('js/allscript.js') }}"></script>    
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/source/backend/js/jquery/colorbox/colorbox.css') }}" media="screen" />
    @yield('script')
</html>
