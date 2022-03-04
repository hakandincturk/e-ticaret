<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('front.index');
})->name('front.mainpage');

Route::get('/hakkimizda', function () {
    return view('front.about');
})->name('front.about');

Route::get('/iletisim', function () {
    return view('front.contact');
})->name('front.contact');

Route::get('/ver', function () {
    return view('ver');
});

Route::get('/admin/', function (){
   return view('back.dashboard');
})->name('back.dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
