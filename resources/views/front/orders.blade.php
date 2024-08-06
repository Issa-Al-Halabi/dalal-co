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
        <div class="row">
            @foreach ($orders as $order)
                <div class="col-md-4">
                    <div class="card text-center">
                        <img class="card-img-top" src="{{ asset('storage/' . $order->maid->image) }}" alt="Card image cap"
                            style="max-width:50%">
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
    </section>
@endsection
