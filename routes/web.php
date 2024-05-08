<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $data = Status::getForm(1);
//     // $data = Order::with(["user", "maid", "status", "statuses",])->first();
//     return $data;
// });


// login - signup
Route::post('/login', [AuthController::class, "login"])->name("login");
Route::post('/signup', [AuthController::class, "signup"])->name("signup");
Route::get('/logout', [AuthController::class, "logout"])->name("logout");

// views
Route::view('/', 'front.index');
Route::view('/master', 'front.master');
Route::view('/whoarewe', 'front.whoarewe');
Route::view('/login', 'front.login');
Route::view('/signup', 'front.signup');
Route::get('/Service', [FrontController::class, "services"]);
Route::get('/Order/{maid}', [FrontController::class, "maidInfo"])->name("Order");
Route::get('/Laws', [FrontController::class, "laws"])->name("laws");

// contact-us
Route::get('/contact-us', [ContactUsController::class, "getCsrfToken"])->name("contactUs");
Route::post('/contact-us', [ContactUsController::class, "submitForm"])->name("contactUs");
