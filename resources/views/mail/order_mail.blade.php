<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تم طلب خادمة</title>
</head>

<body>
    <p>تم طلب خادمة</p>

    <p>اسم العميل :<span>{{ $user->name }}</span></p>

    <p>البريد الالكتروني للعميل :<span>{{ $user->email }}</span></p>

    <p>رقم العميل :<span>{{ $user->phone }}</span></p>

    <p>اسم الخادمة :<span>{{ $maid_name }}</span></p>

</body>

</html>
