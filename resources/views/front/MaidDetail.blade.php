@extends('front.master')

@section('content')
    <section class="ls section_padding_120 team_member">
        <div class="container">
            <div class="row">
                <div
                    @if (isset($maid->video)) class="col-lg-5 col-md-5 col-sm-12 text-center bottommargin_30"
                @else
                class="col-lg-12 col-md-12 col-sm-12 text-center bottommargin_30" @endif>
                    <div class="vertical-item title-absolute">
                        <div class="item-media team_member_photo">
                            <img src="{{ asset('storage/' . $maid->image) }}" alt=""
                                style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                    <div class="item-content with_padding text-center">
                        <h2 class="topmargin_-5 bottommargin_25">
                            {{ $maid->first_name }} <strong>{{ $maid->last_name }}</strong>
                        </h2>
                    </div>
                </div>
                @if (isset($maid->video))
                    <div class="col-lg-7 col-md-7 col-sm-12 text-center bottommargin_30" style="padding-top: 101px;">
                        <div class="vertical-item title-absolute">
                            <div class="item-media team_member_video">
                                <!-- Here's the video -->
                                <iframe width="100%" height="315" src="{{ asset('storage/' . $maid->video) }}"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
    </section>

    <!-- المحتوى الجديد -->
    <section class="ls section_padding_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1 col-lg-6 col-md-7 col-sm-12" style="float: right;">
                    <h1 style="direction: rtl;">معلومات الخادمة</h1>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">السيرة الذاتية</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content top-color-border bottommargin_30">
                        <div class="tab-pane fade in active" style="font-family: cairo light;" id="tab1">
                            <p class="fontsize_20 bottommargin_10 grey" style="direction: rtl;"><strong>السيرة
                                    الذاتية:</strong></p>
                            <p class="line_heght_2">
                            <ul style="direction: rtl;">
                                <li>الأسم بالعربي:
                                    {{ ($maid->getTranslations()['first_name']['ar'] ?? '') . ' ' . ($maid->getTranslations()['last_name']['ar'] ?? '') }}
                                </li>
                                <li>الأسم بالأجنبي:
                                    {{ ($maid->getTranslations()['first_name']['en'] ?? '') . ' ' . ($maid->getTranslations()['last_name']['en'] ?? '') }}
                                </li>
                                <li>الجنسية: {{ $maid->nationality }}</li>
                                <li>العمر: {{ $maid->age }}</li>
                                <li>الدول التي عملت بها: @if ($maid->countries != '')
                                        {{ implode(' , ', $maid->countries) }}
                                    @else
                                        لا يوجد
                                    @endif
                                </li>
                                <li>اللغات: @if ($maid->languages != '')
                                        {{ implode(' , ', $maid->languages) }}
                                    @else
                                        لا يوجد
                                    @endif
                                </li>
                                <li>الخبرات: {{ $maid->experiences }}</li>
                                <li style="overflow-wrap: anywhere;">معلومات اخرى: {!! $maid->description !!}</li>
                            </ul>
                            </p>
                            @if (!$maid->order)
                                <a href="#" id="orderButton" class="theme_button muted_button">أطلب الان</a>
                            @else
                                <a href="#!" id="orderButton2" class="theme_button muted_button"
                                    style="background-color: #212121;" data-toggle="tooltip" data-placement="top"
                                    title="الخادمة لم تعد متوفرة">أطلب الان</a>
                            @endif

                        </div>
                    </div><!-- eof .tab-content -->
                </div>
            </div>
        </div>
    </section>

    <!-- الجزء الآخر من المحتوى -->
    <section class="ds solutions columns_padding_0 teasers-table">
        <div class="container">
            <div class="row">
                <div class="col-md-4 center_bg users-teaser">
                    <div class="teaser media">
                        <div class="media-left">
                            <div class="teaser_icon sprite-icons sprite-users-yellow"></div>
                        </div>
                        <div class="media-body">
                            <p class="margin_0 small-text grey"><strong>Highly-trained staff</strong></p>
                            <p class="margin_0">Sed ut perspiciatis, unde omnis is natus error sit voluptatem</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 center_bg like-teaser">
                    <div class="teaser media with_border">
                        <div class="media-left">
                            <div class="teaser_icon sprite-icons sprite-like-green"></div>
                        </div>
                        <div class="media-body">
                            <p class="margin_0 small-text grey"><strong>Quality cleaning tools</strong></p>
                            <p class="margin_0">Doloremque laudantium, totam aperiam eaque ipsa, quae abillo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 center_bg timer-teaser">
                    <div class="teaser media">
                        <div class="media-left">
                            <div class="teaser_icon sprite-icons sprite-timer-blue"></div>
                        </div>
                        <div class="media-body">
                            <p class="margin_0 small-text grey"><strong>Fast &amp; Effective service</strong></p>
                            <p class="margin_0">Voluptatem accusantium doloremque laudantium totam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- to order --}}
    @if (Auth::check())
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            let title = 'تأكيد';
            let text = 'هل انت متاكد بانك تريد اتمام العملية؟؟';
            let icon = 'warning';
            let confirmButtonText = 'متاكد';
            let action = () => {
                axios({
                    method: 'post',
                    url: '/send-mail',
                    data: {
                        user_id: {{ auth()->user()->id }},
                        maid_id: {{ $maid->id }}
                    }
                }).then((response) => {
                    let data = response.data;
                    console.log(data);
                    if (data["status"] == "success") {
                        Swal.fire({
                            title: "تم اتمام الطلب",
                            text: data["message"],
                            icon: "success",
                            confirmButtonText: "الرجوع",
                        });
                    } else {
                        Swal.fire({
                            title: "حدث خطأ ما",
                            text: data["message"],
                            icon: "error",
                            confirmButtonText: "الرجوع",
                        });
                    }
                }, (error) => {
                    // console.log(error);
                    Swal.fire({
                        title: "حدث خطأ ما",
                        text: "حدث خطأ ما يرجى التاكد من اتصالك بالانترنت",
                        icon: "error",
                        confirmButtonText: "الرجوع",
                    });
                    // Swal.close()
                });
            };
        </script>
    @else
        <script>
            let title = 'لا يمكن اتمام الطلب';
            let text = 'يرجى تسجيل الدخول لتتمكن من الطلب';
            let icon = 'error';
            let confirmButtonText = 'تسجيل الدخول';
            let action = () => {
                window.location.href = "/login";
            };
        </script>
    @endif

    <!-- تضمين مكتبة SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Function to display SweetAlert
        function displaySweetAlert() {
            // Show SweetAlert with a message
            Swal.fire({
                title: title,
                text: text,
                icon: icon,
                confirmButtonText: confirmButtonText,
                didOpen: () => {
                    // console.log("open");
                },
            }).then((result) => {
                console.log(result);
                if (result.isConfirmed) {
                    action();
                    // console.log("Confirmed");
                } else {
                    // console.log("close");
                }
            });
        }

        // Add click event listener to the order button
        document.getElementById('orderButton').addEventListener('click', function(event) {
            // Prevent the default action of the button
            event.preventDefault();

            // Call the function to display SweetAlert
            displaySweetAlert();
        });
    </script>
@endsection
