<footer class="footer ls table_section">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">


    <div class="container">
        <div class="row fotternew">
            <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                <a href="/" class="logo logo_image">
                    <img src="{{ asset('front-assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="mainmenu nav ">
                    <li><a href="/">{{ __('home.home') }}</a></li>
                    <li><a href="/whoarewe"> {{ __('home.who are we') }} </a></li>
                    <li><a href="/Service ">{{ __('home.Maids') }}</a></li>
                    <li><a href="/Laws">{{ __('home.Regulations and laws') }} </a></li>
                    <li>
                        <a style="font-size: 14px;"
                            @if (Auth::check()) href="{{ route('Orders') }}"
                             @else href="{{ route('login', ['trackOrder' => '1']) }}" @endif>
                            {{ __('home.Track my orders') }}
                        </a>
                    </li>
                    <li><a href="{{ url('/') }}#contactSection">{{ __('home.Contact us') }} </a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="social-block" style="align-items: flex-start;">
                    <div class="col-lg-2 col-sm-3 col-xs-12 " style="    padding-bottom: 22px;">
                        <span class="inline-block social-block">
                            <a href="#"
                                class="social-icon color-icon border-icon rounded-icon grey-border facebook"
                                style="margin: 5px;"><i class="fab fa-facebook"></i></a>

                            <a href="https://www.instagram.com/dalalco.sy?igsh=OTM5aHplbGYwM3l0"
                                class="social-icon color-icon border-icon rounded-icon grey-border instagram">
                                <i class="fab fa-instagram"></i></a>
                            <a href="#"
                                class="social-icon color-icon border-icon rounded-icon grey-border youtube"
                                style="margin:5px">
                                <i class="fab fa-youtube"></i></a>
                        </span>
                    </div>
                    <!-- لايقونة الهاتف -->
                    <div style="display: flex; align-items: center;">
                        <a href="#" class="social-icon color-icon border-icon rounded-icon soc-phone grey-border">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                        <a href="tel:0113310150" class="grey-border"> 0113310150 </a>
                    </div>

                    <!-- لايقونة الواتساب -->
                    <div style="display: flex; align-items: center;">
                        <a href="#"
                            class="social-icon color-icon border-icon rounded-icon soc-whatsapp grey-border">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://wa.me/963944941007" class="grey-border" style="direction: ltr;"> +963944941007
                        </a>
                    </div>

                    <!-- لايقونة البريد الإلكتروني -->
                    <div style="display: flex; align-items: center;">
                        <a href="#" class="social-icon color-icon border-icon rounded-icon soc-email grey-border">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="mailto:info@dalal-co.com" class="grey-border"> info@dalal-co.com </a>
                    </div>

                    <!-- لايقونة الموقع الإلكتروني -->
                    <div style="display: flex; align-items: center;">
                        <a href="#"
                            class="social-icon color-icon border-icon rounded-icon soc-website grey-border">
                            <i class="fas fa-globe"></i>
                        </a>
                        <a href="#" class="grey-border" style="font-family: Cairo;">
                            {{ __('home.Damascus - Abu Rummaneh Square Restaurants') }}</a>
                    </div>



                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 14px;">
                <div class="text-center">
                    @if (!Auth::check())
                        <a href="{{ route('login') }}" class="theme_button muted_button"> {{ __('home.sign in') }}
                        </a>
                    @else
                        <a href="{{ route('logout') }}"
                            class="theme_button muted_button">{{ __('home.sign out') }}</a>
                    @endif
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 text-center fontCairo" style="padding-top: 26px;">
                <span class="small-text"> Dalal Co - {{ __('home.Maids recruitment company') }} ©2024 </span>
                <br>
                <span class="small-text"> {{ __('home.Powered By') }} <a href="https://peaklink.sy/"
                        target="_blank">Peak Link</a> </span>
            </div>
        </div>
    </div>
</footer>
