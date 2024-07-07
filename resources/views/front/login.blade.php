<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="icon" type="" href=" {{ asset('front-assets/images/logo.png') }}">
    <link rel="shortcut icon" type="" href="{{ asset('front-assets/images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/fonts/material-design-iconic-font.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <title> Dalal Co </title>


        <style>
            @media screen and (max-width: 768px) {
                .signin-image img {
                    transform: scale(1ٍ);
                    /* تقليل حجم الشعار على الأجهزة الصغيرة */
                }

                .signup-image-link {
                    font-size: 14px;
                    color: #222;
                    display: block;
                    text-align: center;
                }
            }
        </style>
    </head>

    <body  >

        <!-- Login in  Form -->
        <section class="sign-in" style="direction: rtl;">

            <div class="container" style=" font-family: Cairo;">
                @if (isset($_GET['trackOrder']))
                    <div
                        style="text-align: center;
                    font-size: 18px;
                    font-family: Cairo;
                    padding: 10px;
                    color: red;">
                    {{__('home.You must log in to be able to track orders')}}
                    </div>
                @endif
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="front-assets/images/logo.png" alt="صورة التسجيل"></figure>
                    </div>

                    <div class="signin-form">

                        <h2 class="form-title" style="color:#163c53;font-family: Cairo;"> {{ __('home.registration') }}</h2>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="email"
                                  style="font-family: Cairo;" placeholder="{{ __('home.Your E-mail') }} ">
                                <div>
                                    @error('email')
                                        <span style="color: red;font-size: 14px;font-family: Cairo;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password"  style="font-family: Cairo;" placeholder="{{ __('home.password') }} ">
                                <div>
                                    @error('password')
                                        <span style="color: red;font-size: 14px;font-family: Cairo;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"   style="font-family: Cairo;"/>
                                <label for="remember-me" class="label-agree-term"><span
                                        style="margin-left: 7px;font-family: Cairo;"><span></span></span>{{ __('home.Remember me') }}</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                 style="font-family: Cairo;"
                                    value=" {{ __('home.sign in') }}">


                            </div>
                            <a href="/signup" class="signup-image-link" style="font-family: Cairo;">{{ __('home.Create an account') }} </a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
