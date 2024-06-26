<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('front-assets/css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('front-assets/fonts/material-design-iconic-font.css') }}">

        <title>Document</title>

        <style>
            /* Basic styles for larger screens */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8f9fa;
            }

            .container {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .signin-content {
                display: flex;
                flex-direction: row;
                background: white;
                padding: 30px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
            }

            .signin-image,
            .signin-form {
                flex: 1;
                padding: 20px;
            }

            .signin-image img {
                max-width: 100%;
                height: auto;
            }

            .signin-form {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-group label {
                margin-right: 10px;
                color: #333;
            }

            .form-group input[type="text"],
            .form-group input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }

            .form-group input[type="submit"] {
                background-color: #163c53;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }

            .form-group input[type="submit"]:hover {
                background-color: #145b70;
            }

            .signup-image-link {
                display: inline-block;
                margin-top: 10px;
                text-align: center;
                color: #222;
                padding: 0 10px;
            }


            .signup-image-link.mobile {
                display: none;
            }

            /* Responsive styles */
            @media screen and (max-width: 768px) {
                .signup-image-link.mobile {
                    display: block;
                }

                .container {
                    height: auto;
                    padding: 10px;
                }

                .signin-content {
                    flex-direction: column;
                    padding: 20px;
                }

                .signin-image {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .signin-image img {
                    max-width: 50%;
                }

                .signup-image-link {
                    font-size: 14px;
                    color: #222;
                    text-align: center;
                    position: relative;
                    bottom: auto;
                    left: auto;
                    margin-top: 10px;
                }
            }

            @media screen and (max-width: 480px) {
                .signin-image img {
                    max-width: 70%;
                }

                .signup-image-link {
                    font-size: 12px;
                }

                .form-group input[type="submit"] {
                    font-size: 14px;
                }
            }
        </style>
    </head>

    <body>
        <!-- Login Form -->
        <section class="sign-in" style="direction: rtl;">
            <div class="container">

                <div class="signin-content">
                    @if (isset($_GET['trackOrder']))
                        <div style="position: absolute;text-align: center; font-size: 18px; padding: 10px; color: red;">
                            عليك ان تسجل دخول لتتمكن من تتبع الطلبات
                        </div>
                    @endif
                    <div class="signin-image">
                        <figure><img src="front-assets/images/logo.png" alt="صورة التسجيل"></figure>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title" style="color:#163c53;">{{ __('home.registration') }}</h2>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="text" name="email" id="email"
                                    placeholder="{{ __('home.Your E-mail') }}">
                                <div>
                                    @error('email')
                                        <span style="color: red; font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password"
                                    placeholder="{{ __('home.password') }}">
                                <div>
                                    @error('password')
                                        <span style="color: red; font-size: 14px;" class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span
                                        style="margin-left: 7px;"><span></span></span>{{ __('home.Remember me') }}</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"
                                    value="{{ __('home.sign in') }}">
                                <a href="/signup" class="signup-image-link">{{ __('home.Or Create an account') }}</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
