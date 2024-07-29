<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>استمارة تسجيل طلبك لخدمتك</title>
</head>

<body dir="rtl">
    <p>لديك طلب تسجيل طلبك لخدمتك جديد</p>

    <p>معلومات المستخدم : </p>

    <p>الاسم : {{ $mcq->user->name }}</p>

    <p>البريد الالكتروني : {{ $mcq->user->email }}</p>

    <p>الرقم : {{ $mcq->user->phone }}</p>

    <p>معلومات العاملة التي يريدها : </p>

    <p> رعاية مسن : {{ $mcq->elderly_care ? 'نعم' : 'لا' }}</p>

    <p> رعاية أطفال : {{ $mcq->children_care != 0 ? 'عدد الأطفال ' . $mcq->children_care : 'لا' }}</p>

    <p>دورة تمريض : {{ $mcq->nursing_course ? 'نعم' : 'لا' }}</p>

    <p>خبرة بأعمال المنزل : {{ $mcq->homework_experience ? 'نعم' : 'لا' }}</p>

    <p>استقبال : {{ $mcq->reception ? 'نعم' : 'لا' }}</p>

</body>

</html>
