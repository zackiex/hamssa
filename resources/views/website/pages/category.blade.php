@extends('website.layouts.master')

@section('title','Category')

@section('content')

    @php
        $souscategories = \App\SousCategoriesAdmin::all();
    @endphp
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
                        <h4 class="title">@lang("words.categories")</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">@lang("words.home")</a></li>
                            <li>
                                @foreach ($souscategories as $category)
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$category->category->name_categorie_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$category->category->name_categorie_en}}
                                    @else
                                        {{$category->category->name_categorie_fr}}
                                    @endif
                                @endforeach
                            </li>
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
                        <a href="{{ route('vedioshow.edit', $category->id) }}">
                        <img src="{{asset('assets/images/1.jpg')}}" alt="gallery">
                        <p>
                            @foreach ($souscategories as $category)
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                    {{$category->sous_categorie_ar}}
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    {{$category->sous_categorie_en}}
                                @else
                                    {{$category->sous_categorie_fr}}
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->
@endsection

