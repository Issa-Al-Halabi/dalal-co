@extends('front.master')

@section('content')
    @php
        use App\Enums\OrderTypes;

    @endphp
    <section class="container-fluid" style="font-family: Cairo;">
        <div class="row" style="direction: rtl">
            <div class="col-lg-offset-1 col-lg-10 col-sm-12 text-center">
                <p class="small-text margin_0">{{ __('home.My orders') }}</p>
                <h2 class="topmargin_10 bottommargin_25" style="  font-family: Cairo;   color: #103e55;">
                    {{ __('home.track') }}
                    <strong style="color: #103e55;"> {{ __('home.Your orders') }}</strong>
                </h2>

            </div>
        </div>
        @if (!$user->can_track)
            <div class="alert alert-danger d-flex align-items-center text-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                    <path
                        d="M8.982 1.566a1.5 1.5 0 0 0-1.964 0L.165 6.694c-.58.52-.69 1.392-.245 2.053l6 9.325c.506.785 1.473.785 1.98 0l6-9.325c.444-.66.334-1.533-.245-2.053L8.982 1.566zM8 4.5a.5.5 0 0 1 1 0v4.5a.5.5 0 0 1-1 0V4.5zm.93 7.376a.75.75 0 1 1-1.86 0 .75.75 0 0 1 1.86 0z" />
                </svg>
                <div>

                    <p>{{ __('home.do not have permission') }}</p>
                    <p>{{ __('home.grant the permission') }}</p>

                    <a href="https://wa.me/{{ $phone }}?text={{ $message }}" class="theme_button"
                        target="_blank">
                        {{ __('home.Contact us') }}
                    </a>

                </div>
            </div>
        @else
            <div class="row">
                @foreach ($orders as $order)
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('storage/' . $order->maid->image) }}"
                                alt="Card image cap" style="max-width:50%">
                            <div class="card-body">
                                <h5 class="card-title"style="color: #103e55;">{{ $order->maid->first_name }}
                                    {{ $order->maid->last_name }}
                                </h5>
                                @php

                                    $type = $order->type;
                                    if (app()->getLocale() == 'ar') {
                                        $type = OrderTypes::getNameAr(OrderTypes::getValue($order->type));
                                    }
                                @endphp
                                <p>{{ $type }}</p>
                                {{-- <p class="card-text">{{ $maid->description }}</p> --}}
                                <a href="{{ route('OrderTrack', ['type' => $order->type, 'id' => $order->id]) }}"
                                    class="theme_button muted_button">
                                    {{ __('home.track') }}
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
