<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>
        <link href="{{ asset('plugins/bootstrap/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link href="{{ asset('plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/xcharts/xcharts.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/select2/select2.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/justified-gallery/justifiedGallery.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_v2.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/chartist/chartist.min.css') }}" rel="stylesheet">
    </head>
<body>
@include('inc.header')
<!--Start Container-->
<div id="main" class="container-fluid">
    <div class="row">
       @include('inc.sidebar')
        <!--Start Content-->
        <div id="content" class="col-xs-12 col-sm-10">
            <div id="about">
                <div class="about-inner">
                    <h4 class="page-header">Open-source admin theme for you</h4>
                    <p>DevOOPS team</p>
                    <p>Homepage - <a href="http://devoops.me" target="_blank">http://devoops.me</a></p>
                    <p>Email - <a href="mailto:devoopsme@gmail.com">devoopsme@gmail.com</a></p>
                    <p>Twitter - <a href="http://twitter.com/devoopsme" target="_blank">http://twitter.com/devoopsme</a></p>
                    <p>Donate - BTC 123Ci1ZFK5V7gyLsyVU36yPNWSB5TDqKn3</p>
                </div>
            </div>
            <!-- <div class="preloader">
                <img src="{{ asset('img/devoops_getdata.gif') }}" class="devoops-getdata" alt="preloader"/>
            </div> -->
            <div>
                @yield('content')
            </div>
        </div>
        <!--End Content-->
    </div>
</div>
@include('inc.footer')