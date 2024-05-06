<?php

use App\Http\Controllers\ContactUsController;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     $data = Status::getForm(1);
//     // $data = Order::with(["user", "maid", "status", "statuses",])->first();
//     return $data;
// });

Route::view('/', 'front.index');
Route::view('/master', 'front.master');
Route::view('/whoarewe', 'front.whoarewe');
Route::view('/login', 'front.login');
Route::view('/signup', 'front.signup');
Route::view('/Service', 'front.Service');
Route::view('/Order', 'front.Order');

Route::get('/contact-us', [ContactUsController::class, "getCsrfToken"])->name("contactUs");
Route::post('/contact-us', [ContactUsController::class, "submitForm"])->name("contactUs");
