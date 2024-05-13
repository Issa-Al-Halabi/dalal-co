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
        @auth('web')
            <li>
                <a style="font-size: 14px;" href="{{ route('Orders') }}"> {{__('home.Track my orders')}} </a>
            </li>
        @endauth
        <li>
            <a style="font-size: 14px;" href="{{ url('/') }}#contactSection"> {{__('home.Contact us')}}</a>
        </li>

    </ul>
</nav>
<!-- eof main nav -->
