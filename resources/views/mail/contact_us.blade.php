<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <p>استمارة تواصل معنا</p>

        <p>اسم العميل <span>{{ $first_name }} {{ $last_name }}</span></p>

        <p>البريد الالكتروني <span>{{ $email }}</span></p>

        <p>رقم الهاتف <span>{{ $phone }}</span></p>

        <p>الموضوع <span>{{ $subject }}</span></p>

        <p>الرسالة <span>{{ $userMessage }}</span></p>

    </body>

</html>
