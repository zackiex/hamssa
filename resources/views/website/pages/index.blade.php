@extends('website.layouts.master')

@section('title','Index')

@section('content')
    <!--====== SERVICES PART START ======-->
    @php
        $about = \App\AboutAdmin::find(1);
        $slider = \App\Slider::all();
    @endphp
    @if (session('success'))
        <div class="alert alert-success alert-dismissible " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div id="home" class="header_hero slider-active">
        @foreach ($slider as $sliders)
            <div class="single_slider bg_cover d-flex align-items-center"
                 style="background-image: url({{asset('images/slider/'.$sliders->img_slider)}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 col-sm-11">
                            <div class="slider_content">
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                    <h3 class="title" data-animation="fadeInUp"
                                        data-delay="0.2s">{{$sliders->title_ar}}</h3>
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    <h3 class="title" data-animation="fadeInUp"
                                        data-delay="0.2s">{{$sliders->title_en}}</h3>
                                @else
                                    <h3 class="title" data-animation="fadeInUp"
                                        data-delay="0.2s">{{$sliders->title_fr}}</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <section class="services_area pt-110" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">@lang("words.our_services")</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt labore et dolor.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                         data-wow-delay="0.2s">
                        <img src="assets/images/services-1.jpg" alt="services">
                        <h4 class="title">Photography</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                         data-wow-delay="0.6s">
                        <img src="assets/images/services-2.jpg" alt="services">
                        <h4 class="title">Fashion Photography</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="1.3s"
                         data-wow-delay="0.9s">
                        <img src="assets/images/services-3.jpg" alt="services">
                        <h4 class="title">Weeding Videography</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about_area pt-70" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="assets/images/1.jpg" alt="about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-40 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title">
                            <h4 class="title">@lang("words.aboutus")</h4>
                            <p>@lang("words.text_about_us")</p>
                        </div> <!-- section title -->

                        <div class="about_progress">
                            <h4 class="progress_title">Our Service Skills</h4>
                            <div class="about_skills pt-15">
                                <div class="skill_item mt-20">
                                    <div class="skill_header">
                                        <h6 class="skill_title">Photography</h6>
                                        <div class="skill_percentage">
                                            <p><span class="counter">88</span>%</p>
                                        </div>
                                    </div>
                                    <div class="skill_bar">
                                        <div class="bar_inner">
                                            <div class="bar progress_line" data-width="88">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill_item mt-20">
                                    <div class="skill_header">
                                        <h6 class="skill_title">Fashion Photography</h6>
                                        <div class="skill_percentage">
                                            <p><span class="counter">75</span>%</p>
                                        </div>
                                    </div>
                                    <div class="skill_bar">
                                        <div class="bar_inner">
                                            <div class="bar progress_line" data-width="75"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill_item mt-20">
                                    <div class="skill_header">
                                        <h6 class="skill_title">Wedding Videography</h6>
                                        <div class="skill_percentage">
                                            <p><span class="counter">80</span>%</p>
                                        </div>
                                    </div>
                                    <div class="skill_bar">
                                        <div class="bar_inner">
                                            <div class="bar progress_line" data-width="80"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill_item mt-20">
                                    <div class="skill_header">
                                        <h6 class="skill_title">Video Editing</h6>
                                        <div class="skill_percentage">
                                            <p><span class="counter">65</span>%</p>
                                        </div>
                                    </div>
                                    <div class="skill_bar">
                                        <div class="bar_inner">
                                            <div class="bar progress_line" data-width="65"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about_social">
                            <ul class="social">
                                <li><a href={{$about->facebook}}><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href={{$about->twitter}}><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href={{$about->instagram}}><i class="lni lni-instagram-original"></i></a></li>
                                <li><a href={{$about->youtube}}><i class="lni lni-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_counter pt-20">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                             data-wow-delay="0.2s">
                            <i class="lni lni-users"></i>
                            <span id="secondo" class="count countup" cup-end="3540" cup-append="">3540</span>
                            <p>Happy Client</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                             data-wow-delay="0.4s">
                            <i class="lni lni-camera"></i>
                            <span id="secondo" class="count countup" cup-end="750" cup-append="">750</span>
                            <p>Photo Session</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                             data-wow-delay="0.6s">
                            <i class="lni lni-video"></i>
                            <span id="secondo" class="count countup" cup-end="540" cup-append="">540</span>
                            <p>Weeding Video</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single_counter mt-30 wow fadeInUpBig" data-wow-duration="1.3s"
                             data-wow-delay="0.8s">
                            <i class="lni lni-user"></i>
                            <span id="secondo" class="count countup" cup-end="54" cup-append="">54</span>
                            <p>Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->
    <section class="contact_area pt-110 pb-120" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">@lang("words.get_in_touch")</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <form id="contact-form" action="{{route('email.store')}}" method="POST"
                  class="wow fadeInUpBig" enctype="multipart/form-data"
                  data-wow-duration="1.3s" data-wow-delay="0.5s">
                @method('POST')
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div class="single_form">
                            <input type="email" name="email" placeholder="Email" required>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="single_form">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <textarea name="massage" placeholder="Massage" required></textarea>
                            @error('massage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <p class="form-message"></p>
                    <div class="col-lg-12">
                        <div class="single_form">
                            <button type="submit" class="main-btn">@lang("words.send_msg")</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== MAP PART START ======-->

    <section class="map_area" id="maps">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </section>
    <!--====== MAP PART ENDS ======-->
@endsection

