<head>
    <title> Dalal Co </title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Dalal Co" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://dalal-co.com/" />
    <meta property="og:image" content="https://dalal-co.com/dalaco.jpg" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="icon" type="" href=" {{ asset('front-assets/images/logo.png') }}">
    <link rel="shortcut icon" type="" href="{{ asset('front-assets/images/logo.png') }}">


    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-assets/css/main.css') }}" id="color-switcher-link">
    @if (app()->getlocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('front-assets/css/rtl.css') }}">
@endif
    <link rel="stylesheet" href="{{ asset('front-assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="{{ asset('front-assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
