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
            <a style="font-size: 14px;" href="/Laws"> الأنظمة والقوانين</a>
        </li>
        @auth('web')
            <li>
                <a style="font-size: 14px;" href="{{ route('Orders') }}"> تتبع طلباتي</a>
            </li>
        @endauth
        <li>
            <a style="font-size: 14px;" href="{{ url('/') }}#contactSection">الاتصال بنا</a>
        </li>

    </ul>
</nav>
<!-- eof main nav -->
