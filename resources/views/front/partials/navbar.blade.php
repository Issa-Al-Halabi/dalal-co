<nav class="mainmenu_wrapper bordered_items" style=" display:inline-block">
    <ul class="mainmenu nav sf-menu" style="width:max-content ">
        <li class="active">
            <a style="font-size: 14px; z-index: 1001000" href="/"> {{ __('home.home') }}</a>
        </li>
        <li>
            <a style="font-size: 14px;" href="/whoarewe"> {{ __('home.who are we') }}</a>
        </li>
        <li>
            <div class="dropdown">
                <button
                    style="font-weight: 700;line-height: 1.4;padding-top: 27px;padding-bottom: 28px;padding-right: 10px;color: #a0a0a0;"
                    class="dropdown-btn">{{ __('home.Maids') }}
                </button>
                <div class="dropdown-content">
                    @php
                        use App\Models\Nationality;
                        $nationalities = Nationality::where('status', '1')->orderBy('order')->get();

                    @endphp
                    @foreach ($nationalities as $nationality)
                        <a href="{{ route('maids', $nationality->id) }}">{{ $nationality->nationality }}</a>
                    @endforeach
                    <a href="/formmcq">تسجيل طلبك لخدمتك</a>
                </div>
            </div>
        </li>

        <li>
            <a style="font-size: 14px;" href="/Laws"> {{ __('home.Regulations and laws') }} </a>
        </li>

        <li>
            <a style="font-size: 14px;"
                @if (Auth::check()) href="{{ route('Orders') }}"
                 @else href="{{ route('login', ['trackOrder' => '1']) }}" @endif>
                {{ __('home.Track my orders') }}
            </a>
        </li>

        <li>
            <a style="font-size: 14px;" href="{{ url('/') }}#contactSection"> {{ __('home.Contact us') }}</a>
        </li>

        <li>
            @if (!Auth::check())
                <a href="{{ route('login') }}" class="theme_button muted_button mobile-nav">{{ __('home.sign in') }}
                </a>
            @else
                <a href="{{ route('logout') }}" class="theme_button muted_button mobile-nav">{{ __('home.sign out') }}
                </a>
            @endif
        </li>
    </ul>
</nav>
