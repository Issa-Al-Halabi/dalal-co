<nav class="mainmenu_wrapper bordered_items" style="direction: rtl; display:inline-block">
    <ul class="mainmenu nav sf-menu" style="width:max-content ">
        <li class="active">
            <a style="font-size: 14px;" href="/">الرئيسية</a>
        </li>
        <li>
            <a style="font-size: 14px;"href="/whoarewe">من نحن</a>
        </li>
        <li>
            <a style="font-size: 14px;" href="/Service">الخدمات</a>
        </li>
        <li>
            <a style="font-size: 14px;" href="/Laws"> الأنظمة و القوانين</a>
        </li>

        <li>
            <a style="font-size: 14px;"
                @if (Auth::check()) href="{{ route('Orders') }}" 
                 @else href="{{ route('login', ['trackOrder' => '1']) }}" @endif>
                تتبع طلباتي</a>
        </li>

        <li>
            <a style="font-size: 14px;" href="{{ url('/') }}#contactSection">الاتصال بنا</a>
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
