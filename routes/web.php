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

Route::get('/about', function () {
    return view('about');
});

Route::get('/ad_info', function () {
    return view('ad_info');
});

Route::get('/all_ads', function () {
    return view('all_ads');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/blog_details', function () {
    return view('blog_details');
});
Route::get('/blog_grid', function () {
    return view('blog_grid');
});
