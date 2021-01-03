@extends('website.layouts.master')

@section('title','Category')

@section('content')

    @php
        $souscategories = \App\SousCategoriesAdmin::all();
    @endphp
    <!--====== SERVICES PART START ======-->

    <div class="page_banner bg_cover" style="background-image: url({{asset('assets/images/client_bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">@lang("words.gallery")</h4>
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
                        <h4 class="title">@lang("words.vedio_show")</h4>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                        <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                allowfullscreen></iframe>
                    </div>

                    <div id="videoinfos" class="col-md-3">
                        <div class="font-weight-bold text-justify">
                            <h3>@lang("words.description")</h3>
                            <br>
                            <div><span style="color:#FF6464;">@lang("words.title") / </span>
                                @foreach ($souscategories as $sous_category)
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->sous_categorie_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$sous_category->sous_categorie_en}}
                                    @else
                                        {{$sous_category->sous_categorie_fr}}
                                    @endif
                                @endforeach
                            </div>
                            <div><span style="color:#FF6464;">@lang("words.director") / </span>
                                @foreach ($souscategories as $sous_category)
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->director_ar}}
                                    @else
                                        {{$sous_category->director}}
                                    @endif
                                @endforeach
                            </div>

                            <div><span style="color:#FF6464;">@lang("words.year") / </span>
                                {{$sous_category->year}}
                            </div>

                            @if(!empty($sous_category->episode))
                                <div><span style="color:#FF6464;">@lang("words.episode") / </span>
                                    {{$sous_category->episode}}
                                </div>
                            @endif

                            @if(!empty($sous_category->season))
                                <div><span style="color:#FF6464;">@lang("words.season") / </span>
                                    {{$sous_category->season}}
                                </div>
                            @endif

                            @if(!empty($sous_category->client))
                                <div><span style="color:#FF6464;">@lang("words.client") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->client_ar}}
                                    @else
                                        {{$sous_category->client}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->production))
                                <div><span style="color:#FF6464;">@lang("words.production") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->production_ar}}
                                    @else
                                        {{$sous_category->production}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->production_executif))
                                <div><span style="color:#FF6464;">@lang("words.production_executif") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->production_executif_ar}}
                                    @else
                                        {{$sous_category->production_executif}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->synopsis_fr))
                                <div><span style="color:#FF6464;">@lang("words.synopsis") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->synopsis_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$sous_category->synopsis_en}}
                                    @else
                                        {{$sous_category->synopsis_fr}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->scenario_fr))
                                <div><span style="color:#FF6464;">@lang("words.scenario") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->scenario_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$sous_category->scenario_en}}
                                    @else
                                        {{$sous_category->scenario_fr}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->agency_fr))
                                <div><span style="color:#FF6464;">@lang("words.agency") / </span>
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->agency_ar}}
                                    @else
                                        {{$sous_category->agency_fr}}
                                    @endif
                                </div>
                            @endif

                            @if(!empty($sous_category->project_fr))
                                <div><span style="color:#FF6464;">@lang("words.project") / </span>

                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$sous_category->project_ar}}
                                    @else
                                        {{$sous_category->project_fr}}
                                    @endif
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->
@endsection

