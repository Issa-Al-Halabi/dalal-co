<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تم انشاء طلب على موقع دلالكو</title>
    <style>
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
    <p>تم انشاء طلب على موقع دلالكو</p>

    <p>اسم الخادمة :<span>{{ $maidName }}</span></p>

    <p>نوع الطلب : <span>{{ $orderType }}</span></p>

    <a class="btn" href="{{ $url }}">تتبع الخادمة من هنا</a>
</body>

</html>
