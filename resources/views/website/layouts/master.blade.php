<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png" type="image/png')}}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.2.0.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.4.5.2.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @if(LaravelLocalization::getCurrentLocale() == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Cairo', sans-serif;
            }
        </style>
        @endif

</head>

<body>


<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

@include('website.layouts.navbar')

@yield('content')

@include('website.layouts.footer')


<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->


<!--====== Jquery js ======-->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.4.5.2.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{asset('assets/js/ajax-contact.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Appear js ======-->
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>

<!--====== Counter Up js ======-->
<script src="{{asset('assets/js/count-up.min.js')}}"></script>

<!--====== wow js ======-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('assets/js/main.js')}}"></script>

@yield('scripts')
</body>

</html>
