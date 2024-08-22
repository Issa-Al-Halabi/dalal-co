@extends('front.master')
@php
    use App\Enums\OrderStatusStatus;
@endphp
@section('content')
    <style>
        .section-title {
            display: flex;
            margin: 60px auto 10px;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
        }

        .dots {
            display: flex;
            margin: 60px auto 0px;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 100px;
        }

        @media (max-width:768px) {
            .dots {
                flex-direction: column;
                gap: 10px;
            }
        }

        .dot {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        .green-dot {
            background-color: green;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .orange-dot {
            background-color: orange;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .gray-dot {
            background-color: gray;
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .extra-services {
            /* padding-right: 50px; */
        }

        /* -------------------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                        /*   visibility: visible; */
        @charset "UTF-8";
        @import url("https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&family=Roboto:wght@400;500&display=swap");

        .wizard {
            display: grid;
            /* grid-template-columns: 320px 1fr; */
            font-family: "Roboto", sans-serif;
            justify-content: start;
        }

        .process {
            box-model: border-box;
            align-self: center;
            justify-self: center;
            padding: 30px 0;
        }

        .process ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }


        .process ul li.step .desc {
            padding: 5px 10px;
        }

        .process ul li.step .name {
            display: flex;
            align-items: center;
            color: #939393;
        }

        .process ul li.step .name span {
            padding: 0 5px;
            font-size: 18px;
        }

        .process ul li.step .name:before {
            content: "";
            width: 18px;
            height: 18px;
            display: inline-block;
            border-radius: 50%;
            /* margin-right: 8px; */
            background: #ddd;
        }

        .process ul li.step.completed .name {
            color: green;
        }

        .process ul li.step.completed .name:before {
            content: "✓";
            color: white;
            font-size: 0.8em;
            text-align: center;
            background: green;
        }

        .process ul li.step.current .name {
            color: orange;
        }

        .process ul li.step.current .name:before {
            background: orange;
            box-shadow: 0 0 18px #ff9362;
            animation: 1750ms linear infinite pulse;
        }

        .process ul li.step:not(:last-child):after {
            height: 48px;
            width: 2px;
            border-radius: 20px;
            content: "";
            display: block;
            background-color: #ddd;
            margin-left: 7px;
            margin-right: 7px;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .process ul li.step.completed:not(:last-child):after {
            background-color: green;
        }

        .process.done ul li.step .name {
            color: #33673B;
        }

        .process.done ul li.step .name:before {
            background: #33673B;
            box-shadow: none;
            content: "✓";
            color: white;
            font-size: 0.8em;
            text-align: center;
        }

        .process.done ul li.step:not(:last-child):after {
            background-color: #33673B;
            box-shadow: 0 0 8px #88c492;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 2px #ff9362;
            }

            80% {
                box-shadow: 0 0 18px #ff9362;
            }

            100% {
                box-shadow: 0 0 2px #ff9362;
            }
        }
    </style>
    <section>



        <div class="section-title pb-5">
            {{ $order->maid->fullName }}

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
            <div class="dots" dir="{{ app()->getlocale() == 'ar' ? 'rtl' : 'ltr' }}">
                <div class="dot">
                    <div class="green-dot"></div>
                    @lang('tracking_order.completed_tasks')
                </div>
                <div class="dot">
                    <div class="orange-dot"></div>
                    @lang('tracking_order.working_on_tasks')
                </div>
                <div class="dot">
                    <div class="gray-dot"></div>
                    @lang('tracking_order.uncompleted_tasks')
                </div>
            </div>
            <div class="container padding-bottom-3x mb-1">
                <div class="container">

                    <div class="wizard" dir="{{ app()->getlocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <div class="process">
                            <ul>

                                @foreach ($statuses as $status)
                                    <li
                                        class="step @if ($status->status == OrderStatusStatus::completed) completed @elseif ($status->status == OrderStatusStatus::working)current @endif">
                                        <div class="name"> <span>{{ $status->title }}</span></div>
                                        <div class="desc">
                                            {!! $status->description !!}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            @if (isset($order->book_ticket) || isset($order->deliver_service))
                <div class="container">
                    <div class="extra-services" dir="{{ app()->getlocale() == 'ar' ? 'rtl' : 'ltr' }}">
                        <h2>
                            @lang('tracking_order.additional_paid_services')
                        </h2>
                        @if (isset($order->book_ticket))
                            <p>
                                @lang('tracking_order.cost_of_the_maid_ticket')
                                {{ $order->book_ticket }}
                                @lang('tracking_order.sp')
                            </p>
                        @endif
                        @if (isset($order->deliver_service))
                            <p>
                                @lang('tracking_order.delivery_service')
                                {{ $order->deliver_service }}
                                @lang('tracking_order.sp')
                            </p>
                        @endif
                    </div>
                </div>
            @endif
        @endif



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </section>
@endsection
