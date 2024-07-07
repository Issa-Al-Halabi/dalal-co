<!DOCTYPE html>
<html lang="ar">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>تم انشاء طلب على موقع دلالكو</title>
    </head>

    <body>
        <p>تم انشاء طلب على موقع دلالكو</p>

        <p>اسم الخادمة :<span>{{ $maidName }}</span></p>

        <a href="{{ env('APP_URL') }}/user/orders/{{ $maidId }}">تتبع الخادمة من هنا</a>
    </body>

</html>
