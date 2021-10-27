@extends('website.layouts.master')
@section('title','Vedio')
@section('content')
    <div class="page_banner bg_cover" style="background-image: url({{asset('assets/images/client_bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4 class="title">@lang("words.gallery")</h4>
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
            @foreach ($vedios as $vedio)
                <div class="container">
                    <div class="row">
                        <div class="embed-responsive embed-responsive-16by9 col-sm-9">
                            <iframe style="width: 100%" height="345" src= {{$vedio->youtube_link}}></iframe>
                        </div>
                        <div id="videoinfos" class="col-md-3">
                            <div class="font-weight-bold text-justify">
                                <h3>@lang("words.description")</h3>
                                <br>
                                <div><span style="color:#FF6464;">@lang("words.title") / </span>

                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$vedio->title_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$vedio->title_en}}
                                    @else
                                        {{$vedio->title_fr}}
                                    @endif

                                </div>
                                <div><span style="color:#FF6464;">@lang("words.director") / </span>

                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$vedio->director_ar}}
                                    @else
                                        {{$vedio->director}}
                                    @endif

                                </div>

                                <div><span style="color:#FF6464;">@lang("words.year") / </span>
                                    {{$vedio->year}}
                                </div>

                                @if(!empty($vedio->episode))
                                    <div><span style="color:#FF6464;">@lang("words.episode") / </span>
                                        {{$vedio->episode}}
                                    </div>
                                @endif

                                @if(!empty($vedio->season))
                                    <div><span style="color:#FF6464;">@lang("words.season") / </span>
                                        {{$vedio->season}}
                                    </div>
                                @endif

                                @if(!empty($vedio->client))
                                    <div><span style="color:#FF6464;">@lang("words.client") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->client_ar}}
                                        @else
                                            {{$vedio->client}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->production))
                                    <div><span style="color:#FF6464;">@lang("words.production") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->production_ar}}
                                        @else
                                            {{$vedio->production}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->production_executif))
                                    <div><span style="color:#FF6464;">@lang("words.production_executif") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->production_executif_ar}}
                                        @else
                                            {{$vedio->production_executif}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->synopsis_fr))
                                    <div><span style="color:#FF6464;">@lang("words.synopsis") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->synopsis_ar}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$vedio->synopsis_en}}
                                        @else
                                            {{$vedio->synopsis_fr}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->scenario_fr))
                                    <div><span style="color:#FF6464;">@lang("words.scenario") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->scenario_ar}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$vedio->scenario_en}}
                                        @else
                                            {{$vedio->scenario_fr}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->agency_fr))
                                    <div><span style="color:#FF6464;">@lang("words.agency") / </span>
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->agency_ar}}
                                        @else
                                            {{$vedio->agency_fr}}
                                        @endif
                                    </div>
                                @endif

                                @if(!empty($vedio->project_fr))
                                    <div><span style="color:#FF6464;">@lang("words.project") / </span>

                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$vedio->project_ar}}
                                        @else
                                            {{$vedio->project_fr}}
                                        @endif
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->
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
                                <img src="{{asset('images/video/'.$vedio->img_video)}}">
                                <h4 class="title">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$vedio->title_ar}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$vedio->title_en}}
                                    @else
                                        {{$vedio->title_fr}}
                                    @endif
                                </h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

