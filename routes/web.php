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
Route::resource('site','SiteController');  
Route::resource('categories','CategoriesController');  
Route::resource('admin','HomeController'); 
Route::resource('ad','AdController');  
Route::resource('user','UsersController');  

Route::get('/about', function () {
    return view('about');
});
Route::get('/', 'SiteController@index')->name('welcome');


Route::get('/contact', function () {
    return view('contact');
});
   

Route::get('/blog_details', function () {
    return view('blog_details');
});
Route::get('/blog_grid', function () {
    return view('blog_grid');


});


Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () { 
        Route::get('/users_all', 'HomeController@allUsers');
    }
);

Route::group(
    ['prefix' => 'user', 'middleware' => ['auth', 'approved']],
    function () {
        Route::get('/ad_blog', function () {
            return view('logUser.ad_blog');
        });
    }
);
