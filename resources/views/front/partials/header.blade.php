<header class="page_header header_white floating_logo table_section" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-3 nowrap">
                <div class="display_table" style="padding: initial;">
                    <a href="/" class="logo logo_image display_table_cell"style="transform: scale(2);">
                        <img src="{{ asset('front-assets/images/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-xs-9 text-right"style="color:#103f55;  font-family: cairo light;">

                <!-- main nav start -->
                @include('front.partials.navbar')
                <!-- eof main nav -->
                <span class="toggle_menu" style="left: 90px;"><span></span></span>
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="theme_button muted_button">{{__('home.sign in')}}  </a>
                @else
                    <a href="{{ route('logout') }}" class="theme_button muted_button">{{__('home.sign out')}}  </a>
                @endif
                <!-- <a href="appointment.html" class="" style="color:#103f55; text-align: left;">
                    <img src="front-assets/images/bir.png" alt="Flag"
                        style="margin-right: 5px; width: 20px; height: 20px;text-align: left;"> En
                </a> -->
                @if (app()->getLocale() == 'ar')
                    <a href="{{ route('en') }}" class="syria lang-switcher" style="color:#103f55; text-align: left;     padding: 22px;">
                      
                        En
                    </a>
                @else
                    <a href="{{ route('ar') }}" class="lang-switcher" style="color:#103f55; text-align: left;     padding: 22px;">
                        Ar
                    </a>
                @endif
                {{-- {{ Auth::user()->roles }} --}}
            </div>
        </div>

    </div>
</header>
