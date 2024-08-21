@extends('front.master')

@section('content')
    <style>
        /* تخصيص بعض الأنماط للبطاقة */
        .custom-card {
            margin: 20px;
            padding: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        .custom-card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .custom-card-title.ar {
            text-align: right;
            margin-left: 45px;
        }

        .custom-card-title.en {
            text-align: left;
            margin-right: 45px;
        }


        .custom-card-description {
            font-size: 16px;
            color: #666;

        }

        .badge-box {
            position: absolute;
            top: 15px;
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .badge-box.free {
            background-color: green;
        }

        .badge-box.ar {
            left: 15px;
        }

        .badge-box.en {
            right: 15px;
        }


        .custom-card-description.ar {
            text-align: right;
        }

        .custom-card-description.en {
            text-align: left;
        }

        .btn-service-div {
            text-align: right;
        }

        .btn-service-div.left {
            text-align: left;
        }
    </style>

    <div class="container">
        @foreach ($services as $service)
            <div class="card custom-card">
                <div class="card-body ">
                    @if ($service->paid)
                        <div class="badge-box {{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}">
                            {{ __('home.paid') }}
                        </div>
                    @else
                        <div class="badge-box free {{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}">
                            {{ __('home.free') }}
                        </div>
                    @endif

                    <h5 class="card-title custom-card-title {{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}">
                        {{ $service->title }}</h5>
                    <p class="card-text custom-card-description {{ app()->getLocale() == 'ar' ? 'ar' : 'en' }}">
                        {{ $service->description }}
                    </p>
                    <div class="btn-service-div @if (app()->getLocale() == 'en') left @endif">
                        <a href="https://wa.me/{{ $phone }}?text={{ str_replace('service_title', $service->title, $message) }}"
                            class="theme_button" target="_blank">
                            {{ __('home.order') }}
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
