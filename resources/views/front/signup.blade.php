<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('front-assets/css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/fonts/material-design-iconic-font.css') }}">

        <title>المستند</title>
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
                    position: absolute;
                    bottom: 116px;
                    left: 161px;
                }
            }
        </style>
    </head>

    <body>
        <!-- نموذج تسجيل الدخول -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="color:#163c53;    font-family: cairo light;">{{ __('home.Register') }}</h2>
                        <form method="POST" action="{{ route('signup') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group" style="color:#163c53;    font-family: cairo light;">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" value="{{ old('name') }}" id="name"
                                    placeholder="{{ __('home.your name') }}" style="font-family: cairo light;" />
                                <div>
                                    @error('name')
                                        <span style="color: red;font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" value="{{ old('email') }}" id="email"
                                    placeholder="{{ __('home.Your E-mail') }} " style="font-family: cairo light;" />
                                <div>
                                    @error('email')
                                        <span style="color: red;font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" value="{{ old('password') }}" id="password"
                                    placeholder=" {{ __('home.password') }}" style="font-family: cairo light;" />
                                <div>
                                    @error('password')
                                        <span style="color: red;font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                          

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" id="phone"
                                    placeholder="{{ __('home.phone number') }} " style="font-family: cairo light;direction: rtl;" />
                                <div>
                                    @error('phone')
                                        <span style="color: red;font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="terms" value="1" id="agree-term" class="agree-term"
                                    style="font-family: cairo light;"
                                    @if (old('terms')) checked @endif />
                                <label for="agree-term" class="label-agree-term" style="font-family: cairo light;"><span
                                        style="margin-left: 7px;"><span></span></span>  {{ __('home.I agree to all statements in') }}   <a
                                        href="#" class="term-service">{{ __('home.Terms of Service') }} </a></label>
                                <div>
                                    @error('terms')
                                        <span style="color: red;font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="{{ __('home.sign in') }} "
                                    style="font-family: cairo light;" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="front-assets/images/logo.png" alt="صورة التسجيل"
                                style="transform: scale(1.4);"></figure>
                        <a href="/login" class="signup-image-link" style="font-family: cairo light;">{{ __('home.Terms of Service') }} 
                            </a>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
