@extends('website.layouts.master')

@section('title','Category')

@section('content')
    <!--====== SERVICES PART START ======-->h
    <style>
        .banner_content .breadcrumb li + li::before {
            content: '' !important;
        }
    </style>

    <div class="page_banner bg_cover" style="background-image: url({{asset('assets/images/client_bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">@lang("words.categories")</h4>
                        <ul class="breadcrumb justify-content-center">
                            <li class="mr-2"><a href="{{route('index')}}">@lang("words.home")</a></li>
                            <span class="text-white">  /  </span>
                            <li class="ml-2">{{$category_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services_area pt-110" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">@lang("words.gallery")</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt labore et dolor.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                @foreach ($vedios as $vedio)
                    <div class="col-md-4">
                        <div class="single_services text-center mt-30 wow fadeIn"
                             data-wow-duration="1.3s"
                             data-wow-delay="0.2s">
                            <a href="{{ route('vedio.show', $vedio->id) }}">
                                <img src="{{asset('images/sous_category/'.$vedio->img_sous_category)}}">
                                <h4 class="title">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$vedio->sous_categorie_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$vedio->sous_categorie_en}}
                                    @else
                                        {{$vedio->sous_categorie_fr}}
                                    @endif
                                </h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== SERVICES PART ENDS ======-->
@endsection

