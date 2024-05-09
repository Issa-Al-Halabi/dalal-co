@extends('front.master')

@section('content')
    <style>
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

        .steps {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }

        .step {
            display: flex;
            height: 80px;
            width: 80px;
            color: blue;
            text-align: center;
            border: blue 1px solid;
            border-radius: 50%;
            padding: 10px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .step.completed {
            background-color: green;
            color: white;
            border: green 1px solid;
            cursor: pointer;
        }

        .step.working {
            background-color: orange;
            color: white;
            border: orange 1px solid;
        }

        .step.not-completed {
            color: gray;
            border: gray 1px solid;
        }

        .step-num {
            font-size: 30px;
        }

        .step-desc {
            display: none;
        }

        .text {
            direction: rtl;
            margin-top: 30px;
            padding-right: 50px;
            font-size: 18px;
            font-weight: bold;
        }

        .extra-services {
            direction: rtl;
            padding-right: 50px;
        }
    </style>
    <section>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

        {{-- <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"> --}}
        <div class="dots">
            <div class="dot">
                <div class="green-dot"></div>
                المراحل المنجزة
            </div>
            <div class="dot">
                <div class="orange-dot"></div>
                المرحلة التي يتم العمل عليها
            </div>
            <div class="dot">
                <div class="gray-dot"></div>
                المراحل غير المنجزة
            </div>
        </div>
        <div class="container padding-bottom-3x mb-1">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="steps">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($statuses as $status)
                            <div class="step {{ $status->status }}"
                                @if ($status->status == 'completed') onclick="stepClick(this);" @endif>
                                <div class="step-icon-wrap">
                                    <div class="step-num">{{ $i++ }}</div>
                                </div>
                                <h4 class="step-desc"> {!! $status->description !!}</h4>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div id="statusText" class="text">
                    <p>أنقر على أي مرحلة منجزة لرؤية التفاصيل</p>
                </div>
            </div>
        </div>

        @if (isset($order->book_ticket) || isset($order->deliver_service))
            <div class="extra-services">
                <h2>خدمات إضافية مأجورة</h2>
                @if (isset($order->book_ticket))
                    <p> حجز تذكرة سفر , قيمة التذكرة الخاصة بالعاملة هي {{ $order->book_ticket }} ل.س</p>
                @endif
                @if (isset($order->deliver_service))
                    <p> خدمة التوصيل إلى مطار دمشق الدولي هي {{ $order->deliver_service }} ل.س</p>
                @endif
            </div>
        @endif

        <script>
            let text = document.querySelector('#statusText p');

            function stepClick(step) {
                let desc = step.querySelector('.step-desc');
                console.log(desc.children);
                text.innerHTML = desc.innerHTML;
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </section>
@endsection
