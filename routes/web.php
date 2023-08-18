<?php

use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //send email using sync method
    //\Mail::to('abc@gmail.com')->send(new \App\Mail\SendTestMail());

    dispatch(new \App\Jobs\SendEmailJob());
    return view('welcome');
});

Route::get('/redis', [RedisController::class, 'index']);
