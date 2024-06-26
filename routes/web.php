<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;


Route::group([
    "middleware" => ["localization"]
], function () {

    Route::view('/', 'front.index');
    Route::view('/master', 'front.master');
    Route::view('/whoarewe', 'front.whoarewe')->name('whoarewe');
    Route::view('/login', 'front.login');
    Route::view('/signup', 'front.signup');
    Route::get('/Service', [FrontController::class, "services"]);
    Route::get('/MaidDetail/{maid}', [FrontController::class, "maidInfo"])->name("Order");
    Route::get('/Laws', [FrontController::class, "laws"])->name("laws");
    Route::get('/lawDetail/{id}', [FrontController::class, "lawDetail"])->name("lawDetail");
    Route::get('/user/orders', [FrontController::class, "orders"])->name("Orders");
    Route::get('user/orders/{id}', [FrontController::class, "OrderTracking"])->name("OrderTrack")->middleware(["canTrackOrder"]);

    // contact us
    Route::get('/contact-us', [ContactUsController::class, "getCsrfToken"])->name("contactUs");
    Route::post('/contact-us', [ContactUsController::class, "submitForm"])->name("contactUs");

    // send Mail
    Route::post('/send-mail', [ContactUsController::class, "sendOrderMail"])->name("sendMail");

    // login - signup
    Route::post('/login', [AuthController::class, "login"])->name("login");
    Route::post('/signup', [AuthController::class, "signup"])->name("signup");
    Route::get('/logout', [AuthController::class, "logout"])->name("logout");

    // For Translating To Arabic
    Route::get('/ar', function () {

        Session::put("locale", "ar");
        App::setLocale("ar");

        return redirect()->back();
    })->name('ar');

    // For Translating To English
    Route::get('/en', function () {

        Session::put("locale", "en");
        App::setLocale("en");

        return redirect()->back();
    })->name('en');

    Route::get('generate', function () {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        echo 'ok';
    });
});
