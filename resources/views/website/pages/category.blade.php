@extends('website.layouts.master')

@section('title','Category')

@section('content')

    <!--====== SERVICES PART START ======-->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="page_banner bg_cover" style="background-image: url({{asset('assets/images/client_bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">@lang("words.our_services")</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">@lang("words.home")</a></li>
                            <li>@lang("words.services")</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== GALLERY PART START ======-->

    <section class="gallery_area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">Photo Gallery</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt labore et dolor.</p>
                    </div> <!-- section title -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_gallery">
                        <img src="assets/images/gallery-1.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                    <div class="single_gallery">
                        <img src="assets/images/gallery-2.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_gallery">
                        <img src="assets/images/gallery-3.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                    <div class="single_gallery">
                        <img src="assets/images/gallery-4.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_gallery">
                        <img src="assets/images/gallery-5.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                    <div class="single_gallery">
                        <img src="assets/images/gallery-6.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_gallery">
                        <img src="assets/images/gallery-7.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                    <div class="single_gallery">
                        <img src="assets/images/gallery-8.jpg" alt="gallery">
                        <p>Fashion Photography</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->
@endsection

