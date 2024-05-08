<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front-assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/fonts/material-design-iconic-font.css')}}">

    <title>Document</title>
   
    <style>
        @media screen and (max-width: 768px) {
            .signin-image img {
                transform: scale(1ٍ); /* تقليل حجم الشعار على الأجهزة الصغيرة */
            }
            .signup-image-link{
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
    <!-- Sign in  Form -->
    <section class="sign-in" style="direction: rtl;">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="front-assets/images/logo.png"  alt="صورة التسجيل"></figure>
                    <a href="/signup" class="signup-image-link">إنشاء حساب</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title" style="color:#163c53;">تسجيل الدخول</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="اسمك">
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="كلمة المرور">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span style="margin-left: 7px;"><span></span></span>تذكرني</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="تسجيل الدخول">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
