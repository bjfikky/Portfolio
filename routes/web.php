<?php

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

Route::get('/', 'HomeController@index');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{id}', 'PostController@show');


Route::post('/contact', 'HomeController@contact');


/*
|--------------------------------------------------------------------------
| DASHBOARD ROUTES
|--------------------------------------------------------------------------
|
| These are the routes specifically for the backend of the website.
|
*/

Route::get('/dashboard/login', 'DashboardController@login')->name('login');

Route::post('/dashboard/login', 'DashboardController@authUser');

Route::get('/dashboard/logout', 'DashboardController@logout');

Route::get('/dashboard', 'DashboardController@overview');

Route::get('/dashboard/posts', 'DashboardController@posts');

Route::get('/dashboard/categories', 'DashboardController@categories');

Route::get('/dashboard/posts/new', 'DashboardController@newPost');

Route::post('/dashboard/posts/new', 'DashboardController@storepost');

//Route::get('/test', function () {
//    return view('welcome', [
//        'test' => 'Hello '
//    ]);
//});