<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        @if ($is_order)
            {{-- if the user ordered a maid --}}
            <p>تم ارسال طلبك بنجاح</p>

            <p>لقد وصلنا طلبك وسنتصل بك في اقرب وقت</p>
        @else
            {{-- if the user submit the contact us form --}}
            <p>تم ارسال الرسالة بنجاح</p>

            <p>نشكرك على تواصلك معنا</p>
        @endif


    </body>

</html>
