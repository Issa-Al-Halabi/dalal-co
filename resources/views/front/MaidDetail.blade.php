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
                <div class="col-lg-offset-1 col-lg-6 col-md-7 col-sm-12 maidInfo" style="float: left;text-align:left">
                    <h1 style="direction: rtl;"> {{ __('home.Maid information') }}</h1>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">
                                {{ __('home.the biography') }} </a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content top-color-border bottommargin_30">
                        <div class="tab-pane fade in active" style="font-family: Cairo;" id="tab1">
                            <p class="fontsize_20 bottommargin_10 grey"><strong>
                                    {{ __('home.the biography') }}:</strong></p>
                            <p class="line_heght_2">
                            <ul>
                                <li> {{ __('home.The name is in Arabic') }}:
                                    {{ ($maid->getTranslations()['first_name']['ar'] ?? '') . ' ' . ($maid->getTranslations()['last_name']['ar'] ?? '') }}
                                </li>
                                <li> {{ __('home.The name is in english') }} :
                                    {{ ($maid->getTranslations()['first_name']['en'] ?? '') . ' ' . ($maid->getTranslations()['last_name']['en'] ?? '') }}
                                </li>
                                <li> {{ __('home.Nationality') }} :{{ $maid->nationality }}</li>
                                <li>{{ __('home.the age') }}: {{ $maid->age }}</li>
                                <li> {{ __('home.Countries in which I worked') }}: @if ($maid->countries != '')
                                        {{ implode(' , ', $maid->countries) }}
                                    @else
                                        لا يوجد
                                    @endif
                                </li>
                                <li>{{ __('home.Languages') }}: @if ($maid->languages != '')
                                        {{ implode(' , ', $maid->languages) }}
                                    @else
                                        لا يوجد
                                    @endif
                                </li>
                                <li>{{ __('home.Of experience') }}: {{ $maid->experiences }}</li>
                                <li style="overflow-wrap: anywhere;"> {{ __('home.other information') }}:
                                    {!! $maid->description !!}</li>
                            </ul>
                            </p>
                            @if (!$maid->order)
                                <a href="#" id="orderButton" class="theme_button muted_button">
                                    {{ __('home.Order now') }}</a>
                            @else
                                <a href="#!" id="orderButton2" class="theme_button muted_button"
                                    style="background-color: #212121;" data-toggle="tooltip" data-placement="top"
                                    title="{{ __('home.The maid is no longer available.') }}   ">{{ __('home.Order now') }}
                                </a>
                            @endif

                        </div>
                    </div><!-- eof .tab-content -->
                </div>
            </div>
        </div>
    </section>



    {{-- to order --}}
    @if (Auth::check())
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script>
            let title = "{{ __('home.confirm') }}";
            let text = "{{ __('home.are you sure you want to order') }}";
            let icon = 'warning';
            let confirmButtonText = "{{ __('home.confirm') }}";
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
                            title: "  {{ __('home.order completed') }}",
                            text: data["message"],
                            icon: "success",
                            confirmButtonText: "{{ __('home.back') }}",
                        });
                    } else {
                        Swal.fire({
                            title: "{{ __('home.Something went wrong') }}  ",
                            text: data["message"],
                            icon: "error",
                            confirmButtonText: "{{ __('home.back') }}",
                        });
                    }
                }, (error) => {
                    // console.log(error);
                    Swal.fire({
                        title: "{{ __('home.Something went wrong') }}   ",
                        text: " {{ __('home.An error occurred. Please check your internet connection.') }}       ",
                        icon: "error",
                        confirmButtonText: "{{ __('home.back') }}",
                    });
                    // Swal.close()
                });
            };
        </script>
    @else
        <script>
            let title = "{{ __('home.You dont have an account! ') }}";
            let text = "{{ __('home.Sign up in moments') }}";
            let icon = 'error';
            let confirmButtonText = "{{ __('home.sign in') }}";
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
