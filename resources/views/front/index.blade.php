@extends('front.master')

@section('content')

    <body>

        <div class="preloader">
            <div class="preloader_image"></div>
        </div>
        <!--[if lt IE 9]>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <![endif]-->

        <!-- search modal -->
        <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
            <div class="widget widget_search">
                <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control"
                            placeholder="Search keyword" id="modal-search-input">
                    </div>
                    <button type="submit" class="theme_button">Search</button>
                </form>
            </div>
        </div>

        <!-- wrappers for visual page editor and boxed version of template -->
        <div id="canvas">
            <div id="box_wrapper">


                <section class="intro_section page_mainslider ls">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img class="slider1" src="front-assets/images/slide01.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="slide_description_wrapper fontCairo">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="small-text light margin_0">
                                                            {{ __('home.Welcome to our website') }}</p>
                                                        <h1 class="highlight" style="font-size: 39px;">
                                                            {{ __('home.The best recruitment company') }}<br>
                                                            <h1 style="color: #103e55; font-size: 39px;">
                                                                {{ __('home.In syria') }}</h1>
                                                        </h1>
                                                    </div>
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="light" style="font-size: 16px; ">
                                                            {{ __('home.Professional and trained staff to answer your inquiries throughout the day.') }}
                                                        </p>
                                                        <a href="/Service" class="theme_button color1 topmargin_15">
                                                            {{ __('home.Services') }}</a>
                                                    </div>
                                                </div> <!-- eof .slide_description -->
                                            </div> <!-- eof .slide_description_wrapper -->
                                        </div> <!-- eof .col-* -->
                                    </div><!-- eof .row -->
                                </div><!-- eof .container -->
                            </li>

                            <li>
                                <img class="slider1" src="front-assets/images/slide01.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="small-text light margin_0">
                                                            {{ __('home.Welcome to our website') }} </p>
                                                        <h1 class="highlight" style="font-size: 39px;">
                                                            {{ __('home.The best recruitment company') }}<br>
                                                            <h1 style="color: #103e55; font-size: 39px;">
                                                                {{ __('home.In syria') }}</h1>
                                                        </h1>
                                                    </div>
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="light"style="font-size: 16px; ">
                                                            {{ __('home.Experienced and qualified workers for home care, child care and elderly care.') }}
                                                        </p>
                                                        <a href="/Service" class="theme_button color1 topmargin_15">
                                                            {{ __('home.Services') }}</a>
                                                    </div>
                                                </div> <!-- eof .slide_description -->
                                            </div> <!-- eof .slide_description_wrapper -->
                                        </div> <!-- eof .col-* -->
                                    </div><!-- eof .row -->
                                </div><!-- eof .container -->
                            </li>

                            <li>
                                <img class="slider1" src="front-assets/images/slide01.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="slide_description_wrapper" text-align: right;">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="small-text light margin_0">
                                                            {{ __('home.Welcome to our website') }}</p>
                                                        <h1 class="highlight" style="font-size: 39px;">
                                                            {{ __('home.The best recruitment company') }}
                                                            <h1 style="color: #103e55; font-size: 39px;">
                                                                {{ __('home.In syria') }}</h1>
                                                        </h1>

                                                    </div>
                                                    <div class="intro-layer" data-animation="slideExpandUp">
                                                        <p class="light"style="font-size: 16px; ">
                                                            {{ __('home.We offer you the best services in the field of recruitment at competitive prices.') }}
                                                        </p>
                                                        <a href="/Service" class="theme_button color1 topmargin_15">
                                                            {{ __('home.Services') }}</a>
                                                    </div>
                                                </div> <!-- eof .slide_description -->
                                            </div>
                                        </div> <!-- eof .col-* -->
                                    </div><!-- eof .row -->
                                </div><!-- eof .container -->
                            </li>

                        </ul>
                    </div> <!-- eof flexslider -->
                </section>

                <section class="cs contacts teasers-table" style="background: #143d53;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 center_bg phone-teaser">
                                <div class="teaser media">
                                    <div class="media-left">
                                        <div class="fab fa-whatsapp" style="color: white;FONT-SIZE: 34px;">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text margin_0 grey  text-center"> {{ __('home.Have a question?') }}
                                            {{ __('home.call us') }} </p>
                                        <h5 class="margin_0 fontsize_16 yantramanav numberClass  text-center">
                                            <strong>+963944941007</strong>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 center_bg working-hours-teaser">
                                <div class="teaser media with_border">
                                    <div class="media-left">
                                        <div class="far fa-clock" style="color: white;FONT-SIZE: 34px;">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text margin_0 grey text-center">
                                            {{ __('home.We work from Saturday to Thursday') }}
                                        </p>
                                        <h5 class="margin_0 fontsize_16 yantramanav text-center"  style="direction: ltr;">
                                            <strong>  10:00 AM  -  7:00  PM </strong >
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 center_bg location-teaser">
                                <div class="teaser media">
                                    <div class="media-left">
                                        <div class="fas fa-map-marker-alt"style="color: white;FONT-SIZE: 34px;">
                                        </div>
                                    </div>
                                    <div class="media-body" style="overflow: unset;">
                                        <p class="small-text margin_0 grey text-center">
                                            {{ __('home.Need a babysitter! Visit us now') }}
                                        </p>
                                        <h5 class="margin_0 yantramanav fontsize_16 "><strong class="servicetext1">
                                                {{ __('home.Abu Rummaneh - Restaurants Square') }} </strong></h5>

                                        <h5 class="margin_0 yantramanav fontsize_16"><strong class="servicetext1">
                                                {{ __('home.Damascus - Syria') }}</strong></h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ls services section_padding_45">
                    <div class="container">
                        <div class="row servicetext2">
                            <div class="col-sm-12 text-center">
                                <p class="small-text margin_0" style="color: #143d53;">
                                    {{ __('home.Your Favorite Worship Recruitment Company') }}
                                </p>
                                <h2 class="topmargin_10"style="color: #143d53;">
                                    {{ __('home.Providing recruitment services at competitive prices') }} <br>
                                    <strong class="medium" style="color: #143d53;">{{ __('home.And special offers') }}
                                    </strong>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12 text-center center_bg">
                            <img src="front-assets/images/22.webp" style="width: 475px;">
                        </div>
                    </div>
                </section>

                <section class="ls gallery-section">
                    <div class="container-fluid">
                        <div class="row columns_padding_0">
                            <div class="col-sm-12">
                                <div class="owl-carousel" data-margin="0" data-nav="true" data-items="7"
                                    data-responsive-xlg="7" data-responsive-lg="6" data-responsive-md="4"
                                    data-responsive-sm="3" data-responsive-xs="1">

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/01.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/01.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/Room SERVICE.1.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/Room SERVICE.1.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/romm.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/romm.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/kbar.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/kbar.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/03.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/03.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/04.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/04.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/05.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/05.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/06.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/06.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/07.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/07.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/08.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/08.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/09.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/09.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/10.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/10.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/11.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/11.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vertical-item">
                                        <div class="item-media">
                                            <img src="front-assets/images/gallery/12.jpg" alt="">
                                            <div class="media-links">
                                                <div class="links-wrap">
                                                    <a class="p-view prettyPhoto" title=""
                                                        data-gal="prettyPhoto[gal]"
                                                        href="front-assets/images/gallery/12.jpg"></a>
                                                </div>
                                                <a class="abs-link"></a>
                                            </div>
                                        </div>
                                    </div>



                                </div><!-- .owl-carousel -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls testimonials-section section_padding_45">
                    <div class="container">
                        <div class="row" style="direction: rtl">
                            <div class="col-lg-offset-1 col-lg-10 col-sm-12 text-center">
                                <p class="small-text margin_0">{{ __('home.Our clients') }}</p>
                                <h2 class="topmargin_10 bottommargin_25" style="     color: #103e55;">
                                    {{ __('home.What did they say') }}
                                    <strong style="color: #103e55;">{{ __('home.About us') }}</strong>
                                </h2>

                            </div>
                        </div>

                        <div class="row columns_padding_0">
                            <div class="col-sm-12">
                                <div class="owl-carousel testimonials-owl-carousel" data-margin="30" data-nav="true"
                                    data-items="8" data-responsive-xlg="3" data-responsive-lg="3" data-responsive-md="3"
                                    data-responsive-sm="2" data-responsive-xs="1">

                                    <div class="vertical-item text-center" style="direction: rtl; ">
                                        <blockquote class="quote-item">
                                            <div class="quote-body with_border color2 section_bg_color">
                                                <div class="top-color-border">
                                                    <div></div>
                                                </div>
                                                <p class="grey">
                                                    {{ __('home.Dalalcoclients1') }}
                                                </p>
                                                <div class="bottom-arrow with_border section_bg_color"></div>
                                            </div>

                                            <img src="front-assets/images/face01.jpg" alt=""
                                                class="media-object">
                                            <div class="blockquote-meta">
                                                <h5> {{ __('home.Dr.Khalil Zureiq') }}</h5>
                                                <span class="small-text">{{ __('home.dentist') }}
                                                </span>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <div class="vertical-item text-center">
                                        <blockquote class="quote-item">
                                            <div class="quote-body with_border color3 section_bg_color"
                                                style="DIRECTION: RTL;">
                                                <div class="top-color-border">
                                                    <div></div>
                                                </div>
                                                <p class="grey">
                                                    {{ __('home.Dalalcoclients2') }}
                                                </p>
                                                <div class="bottom-arrow with_border section_bg_color"></div>
                                            </div>

                                            <img src="front-assets/images/face02.jpg" alt=""
                                                class="media-object">
                                            <div class="blockquote-meta">
                                                <h5>
                                                    {{ __('home.Mr. Firas Issa') }}</h5>
                                                <span class="small-text"> {{ __('home.regular client') }} </span>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <div class="vertical-item text-center">
                                        <blockquote class="quote-item">
                                            <div class="quote-body with_border color1 section_bg_color"
                                                style="DIRECTION: RTL;">
                                                <div class="top-color-border">
                                                    <div></div>
                                                </div>
                                                <p class="grey">
                                                    {{ __('home.Dalalcoclients3') }} </p>
                                                <div class="bottom-arrow with_border section_bg_color"></div>
                                            </div>

                                            <img src="front-assets/images/face03.jpg" alt=""
                                                class="media-object">
                                            <div class="blockquote-meta">
                                                <h5> {{ __('home.Ms. Hala Murad') }} </h5>
                                                <span class="small-text">{{ __('home.housewife') }}
                                                </span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div><!-- .owl-carousel -->
                        </div>
                    </div>
                </section>
                {{-- ==================================================================================================================== --}}
                {{-- for showing the (Success | Error) message when submitting conratc us form --}}
                @if (session()->has('message') || session()->has('errors'))
                    <script>
                        let contactSection = document.getElementById("contactSection");

                        function sleep(ms) {
                            return new Promise(resolve => setTimeout(resolve, ms));
                        }
                        async function changeElementTop(element) {


                            for (let i = 0; i < 20; i++) {
                                await sleep(20);
                                let elementTop = parseInt(element.style.top);
                                element.style.top = (elementTop - 10) + "px";
                            }
                            element.style.display = "none";
                        }
                    </script>
                    @if (session()->has('message'))
                        <div class="alert alert-success" id="form-submited-message"
                            style="position: fixed;left: 0;top: 70px;z-index: 9999;width: 100%;text-align: center;">
                            {{ session('message') }}
                        </div>
                        <script>
                            let formSubmitedMessage = document.getElementById("form-submited-message");
                            if (!window.location.href.includes("contactSection")) {
                                window.location.href = window.location.href + "#contactSection";
                            }
                            setTimeout(() => {
                                changeElementTop(formSubmitedMessage);
                            }, 4000);
                        </script>
                    @endif


                    @if (session()->has('errors'))

                        @foreach (session('errors')->messages as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
            </div>

            <div class="alert alert-danger" id="form-submited-error"
                style="position: fixed;left: 0;top: 70px;z-index: 9999;width: 100%;text-align: center;">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif
            </div>

            <script>
                let formSubmitedError = document.getElementById("form-submited-error");
                if (!window.location.href.includes("contactSection")) {
                    window.location.href = window.location.href + "#contactSection";
                }
                setTimeout(() => {
                    changeElementTop(formSubmitedError);
                }, 4000);
            </script>
            @endif

            @endif
            {{-- ==================================================================================================================== --}}
            <section id="contactSection"
                class="section_padding_120 ls contact-section muted_section image-background"style="direction: rtl; ">
                <div style="display: flex;justify-content: center;">
                    <h1 style="color: #103e55;"> {{ __('home.caull') }}</h1>
                </div>
                <div class="container">
                    <div class="row contact">
                        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12">
                            <form style="display:none" class="contact-form columns_padding_5 row " method="POST"
                                action="{{ route('contactUs') }}">
                            </form>
                            <form class="contact-form columns_padding_5 row " method="POST"
                                action="{{ route('contactUs') }}">
                                @csrf
                                <div class="col-sm-12 ">
                                    <p class="contact-form-name">
                                        <label for="first_name" class="sr-only">{{ __('home.First name') }}<span
                                                class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30"
                                            value="{{ old('first_name') }}" name="first_name" id="first_name"
                                            class="form-control" placeholder="{{ __('home.First name') }}">
                                    </p>
                                    <div>
                                        @error('first_name')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 ">
                                    <p class="contact-form-name">
                                        <label for="last_name" class="sr-only"> {{ __('home.Last name') }}<span
                                                class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30"
                                            value="{{ old('last_name') }}" name="last_name" id="last_name"
                                            class="form-control" placeholder="{{ __('home.Last name') }}">
                                    </p>
                                    <div>
                                        @error('last_name')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="contact-form-email">
                                        <label for="email" class="sr-only"> {{ __('home.Email') }} <span
                                                class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30"
                                            value="{{ old('email') }}" name="email" id="email"
                                            class="form-control" placeholder=" {{ __('home.Email') }}">
                                    </p>
                                    <div>
                                        @error('email')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="contact-form-phone">
                                        <label for="phone" class="sr-only"> {{ __('home.mobile number') }}<span
                                                class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30"
                                            value="{{ old('phone') }}" name="phone" id="phone"
                                            class="form-control" placeholder="{{ __('home.mobile number') }}">
                                    </p>
                                    <div>
                                        @error('phone')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p class="contact-form-subject">
                                        <label for="subject" class="sr-only"> {{ __('home.subject') }}<span
                                                class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30"
                                            value="{{ old('subject') }}" name="subject" id="subject"
                                            class="form-control" placeholder="{{ __('home.subject') }}">
                                    </p>
                                    <div>
                                        @error('subject')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">

                                    <p class="contact-form-message">
                                        <label for="message" class="sr-only"> {{ __('home.message') }}</label>
                                        <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control"
                                            placeholder="{{ __('home.message') }}">{{ old('subject') }}</textarea>
                                    </p>
                                    <div>
                                        @error('message')
                                            <span style="color: red;font-size: 14px;"
                                                class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">

                                    <p class="contact-form-submit topmargin_30 bottommargin_0 text-center">
                                        <button type="submit" id="contact_form_submit" name="contact_submit"
                                            class="theme_button margin_0 color1"> {{ __('home.send a message') }}</button>
                                    </p>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </body>
@endsection
