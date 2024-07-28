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

    button:hover {
        background-color: #125d63;
    }
</style>
<div class="container-mcq">
        <h2>تسجيل طلب خدمة رعاية</h2>
        <form id="service-form">
            <label for="elder-care">{{__('mcq.Do you need elderly care?')}}</label>
            <div>
                <input type="radio" id="elder-care-yes" name="elder-care" value="yes">
                <label for="elder-care-yes">{{__('mcq.yes')}}</label>
                <input type="radio" id="elder-care-no" name="elder-care" value="no">
                <label for="elder-care-no">{{__('mcq.no')}}</label>
            </div>

            <label for="child-care">  {{__('mcq.Do you need childcare?')}}</label>
            <div>
                <input type="radio" id="child-care-yes" name="child-care" value="yes" onclick="showChildCount(true)">
                <label for="child-care-yes">{{__('mcq.yes')}}</label>
                <input type="radio" id="child-care-no" name="child-care" value="no" onclick="showChildCount(false)">
                <label for="child-care-no">{{__('mcq.no')}}</label>
            </div>

            <div id="child-count-container" style="display: none;">
                <label for="child-count"> {{__('mcq.State the number of children:')}}</label>
                <input type="number" id="child-count" name="child-count" min="1">
            </div>

            <label for="nursing-course">   {{__('mcq.Do you need a nursing course?')}} </label>
            <div>
                <input type="radio" id="nursing-course-yes" name="nursing-course" value="yes">
                <label for="nursing-course-yes">{{__('mcq.yes')}}</label>
                <input type="radio" id="nursing-course-no" name="nursing-course" value="no">
                <label for="nursing-course-no">{{__('mcq.no')}}</label>
            </div>

            <label for="home-experience">{{__('mcq.Home work experience?')}}</label>
            <div>
                <input type="radio" id="home-experience-yes" name="home-experience" value="yes">
                <label for="home-experience-yes">{{__('mcq.yes')}}</label>
                <input type="radio" id="home-experience-no" name="home-experience" value="no">
                <label for="home-experience-no">{{__('mcq.no')}}</label>
            </div>

            <label for="reception">{{__('mcq.Recepion?')}}</label>
            <div>
                <input type="radio" id="reception-yes" name="reception" value="yes">
                <label for="reception-yes">{{__('mcq.yes')}}</label>
                <input type="radio" id="reception-no" name="reception" value="no">
                <label for="reception-no">{{__('mcq.no')}}</label>
            </div>

            <button type="submit">إرسال</button>
        </form>
    </div>
    <script>
        function showChildCount(show) {
            const childCountContainer = document.getElementById('child-count-container');
            if (show) {
                childCountContainer.style.display = 'block';
            } else {
                childCountContainer.style.display = 'none';
            }
        }
    </script>

@endsection
