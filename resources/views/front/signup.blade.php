<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front-assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/fonts/material-design-iconic-font.css')}}">

    <title>المستند</title>

</head>
<body>
    <!-- نموذج تسجيل الدخول -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title" style="color:#163c53;    font-family: cairo light;">التسجيل</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group" style="color:#163c53;    font-family: cairo light;">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="اسمك" style="    font-family: cairo light;"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="بريدك الإلكتروني" style="    font-family: cairo light;"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="كلمة المرور" style="    font-family: cairo light;"/>
                        </div>
                        <div class="form-group">
                          <label for="re-phone"><i class="zmdi zmdi-phone"></i></label>
                         <input type="tel" name="re_phone" id="re_phone" placeholder="رقم الهاتف" style="font-family: cairo light;direction: rtl;"/>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" style="    font-family: cairo light;"/>
                            <label for="agree-term" class="label-agree-term" style="    font-family: cairo light;"><span style="    margin-left: 7px;"><span></span></span>أوافق على جميع البيانات في  <a href="#" class="term-service">شروط الخدمة</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="تسجيل" style="    font-family: cairo light;"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="front-assets/images/logo.png"  alt="صورة التسجيل" style="    transform: scale(1.4);"></figure>
                    <a href="/login" class="signup-image-link" style="    font-family: cairo light;">أنا عضو بالفعل</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
