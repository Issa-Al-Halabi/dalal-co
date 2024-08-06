<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تم تغيير حالة الطلب</title>
    <style>
        .container {
            text-align: center;
        }

        .btn {
            outline: none;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: teal;
            color: white;
            margin: 0 auto;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>تم تغيير حالة الطلب</p>

        <p>نوع الطلب : <span>{{ $orderType }}</span></p>

        <p>اسم الخادمة :<span>{{ $maidName }}</span></p>

        <p>{!! $stateHtml !!}</p>

        <p> يمكنك تتبع الطلب من بالضغط على الزر ادناه</p>

        <a class="btn" href='{{ $url }}'>تتبع الطلب</a>
    </div>
</body>

</html>
