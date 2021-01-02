<!--====== FOOTER PART START ======-->

@php
    $about = \App\AboutAdmin::find(1);
@endphp

<section class="footer_area ">
    <div class="container">
        <div class="footer_widget pt-120 pb-120">
            <div class="footer_content text-center">
                <a href="javscript:void(0)" class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <img src="assets/images/logo-2.svg" alt="logo">
                </a>
                <span class="mail wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">{{$about->email}}</span>
                <ul class="footer_menu wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            <a>@lang("words.adress")</a><br>
                            <a>{{$about->adresse_ar}}</a>
                        @else
                            <a>@lang("words.adress")</a><br>
                            <a>{{$about->adresse}}</a>
                        @endif
                    </li>
                    <li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            <a>@lang("words.temps")</a><br>
                            <a>{{$about->tempstravail_ar}}</a>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <a>@lang("words.temps")</a><br>
                            <a>{{$about->tempstravail_en}}</a>
                        @else
                            <a>@lang("words.temps")</a><br>
                            <a>{{$about->tempstravail_fr}}</a>
                        @endif
                    </li>
                    <li>
                        <a>@lang("words.tel")</a><br>
                        <a>{{$about->telephone}}</a>
                    </li>
                    <li>
                        <a>@lang("words.telfix")</a><br>
                        <a>{{$about->telephonefixe}}</a>
                    </li>
                    <li>
                        <a>@lang("words.fax")</a><br>
                        <a>{{$about->fax}}</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="footer_social_copyright text-center d-sm-flex align-items-center justify-content-between">
            <div class="footer_social">
                <ul class="social">
                    <li><a href={{$about->facebook}}><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href={{$about->twitter}}><i class="lni lni-twitter-original"></i></a></li>
                    <li><a href={{$about->instagram}}><i class="lni lni-instagram-original"></i></a></li>
                    <li><a href={{$about->youtube}}><i class="lni lni-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer_copyright">
                <p>Designed and Developed by <a href="#" rel="nofollow">Zakaria Attia</a></p>
            </div>
        </div>
    </div>
</section>

<!--====== FOOTER PART ENDS ======-->
