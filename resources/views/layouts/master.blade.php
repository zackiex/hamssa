<!DOCTYPE html>
<html class="no-js lt-ie10" lang="fr">
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/themes.css')}}">
    <script src="{{asset('js/vendor/modernizr-3.3.1.min.js')}}"></script>
    <style>
        .input-group .form-control:first-child,
        .input-group-addon:first-child, .input-group-btn:first-child >
        .btn, .input-group-btn:first-child > .btn-group > .btn, .input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
            width: 400px;
        }
    </style>
</head>
<body>
<div id="page-wrapper" class="page-loading">
    <div class="preloader">
        <div class="inner">
            <div class="preloader-spinner themed-background hidden-lt-ie10"></div>
            <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
        </div>
    </div>
    <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
        <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
            <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');">
                <i  class="fa fa-times"></i></a>
        </div>
        @include('layouts.sidebar')
        <div id="main-container">
            @include('layouts.navbar')
            <div id="page-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/pages/readyDashboard.js')}}"></script>
<script src="{{asset('js/pages/uiTables.js')}}"></script>
<script src="{{asset('js/pages/formsWizard.js')}}"></script>

@yield('scripts')
</body>
</html>

