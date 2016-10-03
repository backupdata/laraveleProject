<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
// Route::auth();

// Route::get('/home', 'HomeController@index');

Route::get('auth/redirect', 'SocialAuthController@redirect');
Route::get('auth/callback', 'SocialAuthController@callback');

//Route::post('registerr', 'Auth\RegisterController@register');
Auth::routes();

Route::get('/home', 'HomeController@index');

