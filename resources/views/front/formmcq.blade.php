@extends('front.master')

@section('content')
    <style>
        .container-mcq {
            margin: 50px auto;
            padding: 20px 30px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 500px;
            direction: rtl;
        }

        h2 {
            text-align: center;
            color: #143d53;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            color: #143d53;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="number"] {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 20px);
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: teal;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        #mcq_submit:hover {
            background-color: #125d63;
        }
    </style>

    {{-- ==================================================================================================================== --}}
    {{-- for showing the (Success | Error) message when submitting conratc us form --}}
    @if (session()->has('message') || session()->has('errors'))
        <script>
            let contactSection = document.getElementById("contactSection");

            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
            async function changeElementTop(element) {


                for (let i = 0; i < 20; i++) {
                    await sleep(20);
                    let elementTop = parseInt(element.style.top);
                    element.style.top = (elementTop - 10) + "px";
                }
                element.style.display = "none";
            }
        </script>
        @if (session()->has('message'))
            <div class="alert alert-success" id="form-submited-message"
                style="position: fixed;left: 0;top: 70px;z-index: 9999;width: 100%;text-align: center;">
                {{ session('message') }}
            </div>
            <script>
                let formSubmitedMessage = document.getElementById("form-submited-message");

                setTimeout(() => {
                    changeElementTop(formSubmitedMessage);
                }, 4000);
            </script>
        @endif


        @if (session()->has('errors'))

            @foreach (session('errors')->messages as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
            </div>

            <div class="alert alert-danger" id="form-submited-error"
                style="position: fixed;left: 0;top: 70px;z-index: 9999;width: 100%;text-align: center;">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif
            </div>

            <script>
                let formSubmitedError = document.getElementById("form-submited-error");

                setTimeout(() => {
                    changeElementTop(formSubmitedError);
                }, 4000);
            </script>
        @endif

    @endif



    <div class="container-mcq">
        <h2>تسجيل طلبك لخدمتك</h2>
        <form id="service-form" method="POST" action="{{ route('submitMCQForm') }}">
            @csrf
            <label for="elder-care">{{ __('mcq.Do you need elderly care?') }}</label>
            <div>
                <input type="radio" id="elder-care-yes" name="elderly_care" value="1">
                <label for="elder-care-yes">{{ __('mcq.yes') }}</label>
                <input type="radio" id="elder-care-no" name="elderly_care" value="0">
                <label for="elder-care-no">{{ __('mcq.no') }}</label>
            </div>


            <label for="child-care"> {{ __('mcq.Do you need childcare?') }}</label>
            <div>
                <input type="radio" id="child-care-yes" name="children_care" value="1"
                    onclick="showChildCount(true)">
                <label for="child-care-yes">{{ __('mcq.yes') }}</label>
                <input type="radio" id="child-care-no" name="children_care" value="0"
                    onclick="showChildCount(false)">
                <label for="child-care-no">{{ __('mcq.no') }}</label>
            </div>

            <div id="child-count-container" style="display: none;">
                <label for="child-count"> {{ __('mcq.State the number of children:') }}</label>
                <input type="number" id="child-count" name="children_care" min="1">
            </div>

            <label for="nursing-course"> {{ __('mcq.Do you need a nursing course?') }} </label>
            <div>
                <input type="radio" id="nursing-course-yes" name="nursing_course" value="1">
                <label for="nursing-course-yes">{{ __('mcq.yes') }}</label>
                <input type="radio" id="nursing-course-no" name="nursing_course" value="0">
                <label for="nursing-course-no">{{ __('mcq.no') }}</label>
            </div>

            <label for="home-experience">{{ __('mcq.Home work experience?') }}</label>
            <div>
                <input type="radio" id="home-experience-yes" name="homework_experience" value="1">
                <label for="home-experience-yes">{{ __('mcq.yes') }}</label>
                <input type="radio" id="home-experience-no" name="homework_experience" value="0">
                <label for="home-experience-no">{{ __('mcq.no') }}</label>
            </div>

            <label for="reception">{{ __('mcq.Recepion?') }}</label>
            <div>
                <input type="radio" id="reception-yes" name="reception" value="1">
                <label for="reception-yes">{{ __('mcq.yes') }}</label>
                <input type="radio" id="reception-no" name="reception" value="0">
                <label for="reception-no">{{ __('mcq.no') }}</label>
            </div>

            <button id="mcq_submit" type="submit">إرسال</button>
        </form>
    </div>
    <script>
        function showChildCount(show) {
            const childCountContainer = document.getElementById('child-count-container');
            const childCount = document.getElementById('child-count');

            if (show) {
                childCountContainer.style.display = 'block';
                childCount.setAttribute('required', 'required');
            } else {
                childCountContainer.style.display = 'none';
                childCount.removeAttribute('required');

            }
        }
    </script>
@endsection
