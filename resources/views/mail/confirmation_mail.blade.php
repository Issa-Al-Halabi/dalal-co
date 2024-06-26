<!DOCTYPE html>
<html lang="ar">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>تم ارسال طلبك بنجاح</title>
    </head>

    <body dir="rtl">
        @if ($is_order)
            {{-- if the user ordered a maid --}}
            <p>تم ارسال طلبك بنجاح</p>

            <p>لقد وصلنا طلبك وسنتصل بك في اقرب وقت</p>

            <p>للاستفسارات العاجلة، يرجى الاتصال عن طريق ال WhatsApp على الرقم التالي: </p>

            <p dir="ltr" style="text-align: center"> <a href="tel:+963944941007">+963 944 941 007</a></p>
        @else
            {{-- if the user submit the contact us form --}}
            <p>تم ارسال رسالتكم بنجاح!</p>

            <p>شكراً لتواصلكم معنا، سنقوم بالرد على استفسارتكم في أسرع وقت ممكن.</p>

            <p>للاستفسارات العاجلة، يرجى الاتصال عن طريق ال WhatsApp على الرقم التالي: </p>

            <p dir="ltr" style="text-align: center"> <a href="tel:+963944941007">+963 944 941 007</a></p>
        @endif


    </body>

</html>
