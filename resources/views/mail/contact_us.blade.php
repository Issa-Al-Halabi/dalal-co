<!DOCTYPE html>
<html lang="ar">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>استمارة تواصل معنا</title>
    </head>

    <body>
        <p>استمارة تواصل معنا</p>

        <p>اسم العميل <span>{{ $contactUs->first_name }} {{ $contactUs->last_name ?? '' }}</span></p>

        <p>البريد الالكتروني <span>{{ $contactUs->email ?? 'لا يوجد' }}</span></p>

        <p>رقم الهاتف <span>{{ $contactUs->phone }}</span></p>

        <p>الموضوع <span>{{ $contactUs->subject ?? 'لا يوجد' }}</span></p>

        <p>الرسالة <span>{{ $contactUs->userMessage ?? 'لا يوجد' }}</span></p>

    </body>

</html>
