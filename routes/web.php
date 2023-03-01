<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('admission', function () {
    return view('admission');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('service', function () {
    return view('services');
});
Route::get('about', function () {
    return view('about');
});

Route::post('send', [MessageController::class, 'send'])->name('send');

