<nav class="mainmenu_wrapper bordered_items" style=" display:inline-block">
    <ul class="mainmenu nav sf-menu" style="width:max-content ">
        <li class="active">
            <a style="font-size: 14px;" href="/">  {{__('home.home')}}</a>
        </li>
        <li>
            <a style="font-size: 14px;"href="/whoarewe"> {{__('home.who are we')}}</a>
        </li>
        <li>
            <a style="font-size: 14px;" href="/Service">{{__('home.Maids')}}</a>
        </li>
        <li>
            <a style="font-size: 14px;" href="/Laws">  {{__('home.Regulations and laws')}} </a>
        </li>

        <li>
            <a style="font-size: 14px;"
                @if (Auth::check()) href="{{ route('Orders') }}" 
                 @else href="{{ route('login', ['trackOrder' => '1']) }}" @endif>
                تتبع طلباتي</a>
        </li>

        <li>
            <a style="font-size: 14px;" href="{{ url('/') }}#contactSection"> {{__('home.Contact us')}}</a>
        </li>

        <li>
            @if (!Auth::check())
                <a href="{{ route('login') }}" class="theme_button muted_button mobile-nav">تسجيل الدخول
                </a>
            @else
                <a href="{{ route('logout') }}" class="theme_button muted_button mobile-nav">تسجيل الخروج
                </a>
            @endif
        </li>

    </ul>
</nav>
<!-- eof main nav -->
