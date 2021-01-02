<!--====== HEADER PART START ======-->
@php
    $cat = \App\CategoriesAdmin::all();

@endphp

<section class="header_area" id="index">
    <div class="header_navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand">
                            <img src="assets/images/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar"
                             id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a href="#index">@lang("words.home")</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#service">@lang("words.services")</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#about">@lang("words.about")</a>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="contact.html">@lang("words.categories")</a>
                                    <div class="dropdown-content">
                                        @foreach ($cat as $category)
                                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                                <a href="{{ route('category.edit', $category->id) }}">{{$category->name_categorie_ar}}</a>
                                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                                <a href="{{ route('category.edit', $category->id) }}">{{$category->name_categorie_en}}</a>
                                            @else
                                                <a href="{{ route('category.edit', $category->id) }}">{{$category->name_categorie_fr}}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact">@lang("words.contact")</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#maps">@lang("words.maps")</a>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown ml-2">
                            <button class="btn btn-outline-danger dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                    <img class="mr-1"
                                         src="https://cdn.countryflags.com/thumbs/algeria/flag-400.png"
                                         width="30">
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    <img class="mr-1"
                                         src="https://www.countryflags.com/wp-content/uploads/united-states-of-america-flag-png-large.png"
                                         width="30">
                                @else
                                    <img class="mr-1"
                                         src="https://cdn.countryflags.com/thumbs/france/flag-400.png"
                                         width="30">
                                @endif
                                {{ LaravelLocalization::getCurrentLocaleName() }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                        @if($properties['native'] == 'English')
                                            <img class="mr-1"
                                                 src="https://www.countryflags.com/wp-content/uploads/united-states-of-america-flag-png-large.png"
                                                 width="30">
                                        @elseif($properties['native'] == 'Arabic' || $properties['native'] == 'العربية')
                                            <img class="mr-1"
                                                 src="https://cdn.countryflags.com/thumbs/algeria/flag-400.png"
                                                 width="30">
                                        @else
                                            <img class="mr-1"
                                                 src="https://cdn.countryflags.com/thumbs/france/flag-400.png"
                                                 width="30">
                                        @endif

                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>



</section>

<!--====== HEADER PART ENDS ======-->
