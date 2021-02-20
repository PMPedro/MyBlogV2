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

//Pages
Route::get('/', function () {
    return view('/MyTemp/Welcome');
});

Route::get('/Boas', function () {
    return view('/MyTemp/Assets');
});


Route::get('/aboutUs', function () {
    return view('/MyTemp/aboutMe');
});


Route::get('/blog', function () {
    return view('/blog');
});


Route::get('/profile', function () {
    return view('/MyTemp/profile');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//My controllers 

Route::get('Insert/{Text}', [App\Http\Controllers\MakePost::class, 'NewPosts']);  

Route::get('view-records', [App\Http\Controllers\GetData::class, 'getData']);  

