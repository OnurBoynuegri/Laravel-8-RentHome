<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    @yield('css')
    @yield('headerjs')
</head><!--/head-->

<body>
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@include('home._header')
    @section('slider')

    @show
<section>
    <div class="container">
        @section('breadcrumbs')
        @show
        <div class="row">

                @section('category')
                @show

                @section('content')
                    içerik alanı
                @show
        </div>
    </div>
    </div>
</section>
@include('home._footer')
@yield('footerjs')
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/price-range.js"></script>
<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>
