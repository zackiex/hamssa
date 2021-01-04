@extends('website.layouts.master')

@section('title','Category')

@section('content')
    <!--====== SERVICES PART START ======-->h
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
                        <h4 class="title">@lang("words.categories")</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">@lang("words.home")</a></li>
                            <li>{{$category_name}}</li>
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
                        <h4 class="title">@lang("words.gallery")</h4>
                    </div> <!-- section title -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_gallery">
                        @foreach ($vedios as $vedio)
                            <a href="{{ route('vedio.show', $vedio->id) }}">
                                <img src="{{asset('assets/images/1.jpg')}}" alt="gallery">
                           <p>
                               @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                   {{$vedio->sous_categorie_ar}}
                               @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                   {{$vedio->sous_categorie_en}}
                               @else
                                   {{$vedio->sous_categorie_fr}}
                               @endif
                           </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->
@endsection

