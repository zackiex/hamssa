@extends('layouts.master')
@section('title','Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Simple Stats Widgets -->
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background">
                        <i class="gi gi-cardio text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong><span data-toggle="counter" data-to="2835"></span></strong>
                    </h2>
                    <span class="text-muted">SALES</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-success">
                        <i class="gi gi-user text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-success">
                        <strong>+ <span data-toggle="counter" data-to="2862"></span></strong>
                    </h2>
                    <span class="text-muted">NEW USERS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-warning">
                        <i class="gi gi-briefcase text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-warning">
                        <strong>+ <span data-toggle="counter" data-to="75"></span></strong>
                    </h2>
                    <span class="text-muted">PROJECTS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-danger">
                        <i class="gi gi-wallet text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-danger">
                        <strong>$ <span data-toggle="counter" data-to="5820"></span></strong>
                    </h2>
                    <span class="text-muted">EARNINGS</span>
                </div>
            </a>
        </div>
        <!-- END Simple Stats Widgets -->
    <div class="row">
        <!-- Simple Stats Widgets -->
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-dark-social">
                    <span class="pull-right text-muted">+30%</span>
                    <strong class="text-light-op">Today</strong>
                </div>
                <div class="widget-content themed-background-social clearfix">
                    <div class="widget-icon pull-right">
                        <i class="gi gi-airplane text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-light"><strong>+ 10</strong></h2>
                    <span class="text-light-op">FLIGHTS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-dark-flat">
                    <span class="pull-right text-muted">-20%</span>
                    <strong class="text-light-op">This month</strong>
                </div>
                <div class="widget-content themed-background-flat clearfix">
                    <div class="widget-icon pull-right">
                        <i class="gi gi-albums text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-light"><strong>+ 5</strong></h2>
                    <span class="text-light-op">ALBUMS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-dark-creme">
                    <span class="pull-right text-muted">2 Free!</span>
                    <strong class="text-light-op">Now</strong>
                </div>
                <div class="widget-content themed-background-creme clearfix">
                    <div class="widget-icon pull-right">
                        <i class="gi gi-wifi text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-light"><strong>15</strong></h2>
                    <span class="text-light-op">NETWORKS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-dark-amethyst">
                    <span class="pull-right text-muted">+250%</span>
                    <strong class="text-light-op">This week</strong>
                </div>
                <div class="widget-content themed-background-amethyst clearfix">
                    <div class="widget-icon pull-right">
                        <i class="gi gi-video_hd text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-light"><strong>25</strong></h2>
                    <span class="text-light-op">HD VIDEOS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <span class="pull-right text-muted">+30%</span>
                    <strong class="text-dark">Today</strong>
                </div>
                <div class="widget-content text-right clearfix">
                    <div class="widget-icon themed-background-social pull-left">
                        <i class="gi gi-airplane text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 themed-color-social"><strong>+ 10</strong></h2>
                    <span class="text-muted">FLIGHTS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <span class="pull-right text-muted">-20%</span>
                    <strong class="text-dark">This month</strong>
                </div>
                <div class="widget-content text-right clearfix">
                    <div class="widget-icon themed-background-flat pull-left">
                        <i class="gi gi-albums text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 themed-color-flat"><strong>+ 5</strong></h2>
                    <span class="text-muted">ALBUMS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <span class="pull-right text-muted">2 Free!</span>
                    <strong class="text-dark">Now</strong>
                </div>
                <div class="widget-content text-right clearfix">
                    <div class="widget-icon themed-background-creme pull-left">
                        <i class="gi gi-wifi text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 themed-color-creme"><strong>15</strong></h2>
                    <span class="text-muted">NETWORKS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini themed-background-muted">
                    <span class="pull-right text-muted">+250%</span>
                    <strong class="text-dark">This week</strong>
                </div>
                <div class="widget-content text-right clearfix">
                    <div class="widget-icon themed-background-amethyst pull-left">
                        <i class="gi gi-video_hd text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 themed-color-amethyst"><strong>25</strong></h2>
                    <span class="text-muted">HD VIDEOS</span>
                </div>
            </a>
        </div>
        <!-- END Simple Stats Widgets -->
@endsection
