<!--====== FOOTER PART START ======-->

@php
    $about = \App\AboutAdmin::find(1);
@endphp

<section class="footer_area ">
    <div class="container">
        <div class="footer_widget pt-120 pb-120">
            <div class="footer_content text-center">
                <a href="javscri3t:void(0)" class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <img src="{{asset('assets/images/logopngf.png')}}" alt="logo">
                </a>
                <span class="mail wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">{{$about->email}}</span>
                <ul class="footer_menu wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            <img src="{{asset('assets/images/icons/maps.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                            <a>{{$about->adresse_ar}}</a>
                        @else
                            <img src="{{asset('assets/images/icons/maps.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                            <a>{{$about->adresse}}</a>
                        @endif
                    </li>
                    <li>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            <img src="{{asset('assets/images/icons/time.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                            <a>{{$about->tempstravail_ar}}</a>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            <img src="{{asset('assets/images/icons/time.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                            <a>{{$about->tempstravail_en}}</a>
                        @else
                            <img src="{{asset('assets/images/icons/time.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                            <a>{{$about->tempstravail_fr}}</a>
                        @endif
                    </li>
                    <li>
                        <img src="{{asset('assets/images/icons/phone.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                        <a>(+213) {{$about->telephone}}</a>
                    </li>
                    <li>
                        <img src="{{asset('assets/images/icons/fixe.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                        <a>(+213) {{$about->telephonefixe}}</a>
                    </li>
                    <li>
                       <img src="{{asset('assets/images/icons/fax.png')}}" style="height: 30px;width: 30px">
                            <br>
                            <br>
                        <a>(+213) {{$about->fax}}</a>
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
