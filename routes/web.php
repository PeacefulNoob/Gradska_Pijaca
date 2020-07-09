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
Route::resource('categories_post','CategoriesPostController');  

Route::resource('admin','HomeController'); 
Route::resource('ad','AdController');  
Route::resource('user','UsersController');  
Route::resource('post','PostController');  
Route::resource('tag','TagController');  



Route::get('/about', function () {
    return view('about');
});
Route::get('/', 'SiteController@index')->name('welcome');


Route::get('/contact', function () {
    return view('contact');
});
   
Route::get('/showLocation/{location}', 'CategoriesController@showLocation');

Route::post('/posts/{post}/comments' , 'CommentController@store');




Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () { 
        Route::get('/users_all', 'HomeController@allUsers');
    }
);


Route::get('/like/{id}' , 'AdController@like')->middleware("auth");

Route::group(
    ['prefix' => 'user', 'middleware' => ['auth', 'approved']],
    function () {
      
        Route::get('/showUserBlogs/{id}', 'UsersController@showUserBlogs');

    }
);
