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

  .badge-box.ar {
    left: 15px;
    }

 .badge-box.en{
       right: 15px;
    }
    .custom-card-title.ar{
        text-align: right;
    }
    .custom-card-title.en{
        text-align: left;
    }
    .custom-card-description.ar{
        text-align: right;
    }
    .custom-card-description.en{
        text-align: left;
    }
</style>

<div class="container">
    <div class="card custom-card">
        <div class="card-body ">
            <div class="badge-box {{ app()->getLocale() == 'ar'?'ar':'en'}}">مأجور</div>
            <h5 class="card-title custom-card-title {{ app()->getLocale() == 'ar'?'ar':'en'}}">عنوان البطاقة</h5>
            <p class="card-text custom-card-description {{ app()->getLocale() == 'ar'?'ar':'en'}}">
                هذا هو وصف البطاقة. يمكنك استخدام هذه البطاقة لعرض معلومات معينة مثل عنوان ووصف، أو أي محتوى آخر تود عرضه.
            </p>
        </div>
    </div>
    <!-- يمكنك تكرار البطاقة حسب الحاجة -->
</div>
@endsection
