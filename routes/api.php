<?php

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// for test purpose
Route::get('/email', function () {
    $user_name = 'user name';
    $maid_name = 'الخادمة 5';

    Mail::to('eesahalabi@gmail.com')->send(new OrderMail($user_name, $maid_name));

    return "Email sent successfully!";
});
