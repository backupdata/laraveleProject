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

Route::get('/home', 'HomeController@index');
Route::get('/adminHome', 'HomeController@adminHomeScreen');

// admin login 
Route::get('/Adminlogin', 'loginAdmin@index'); 
//Route::post('/login_Admin', 'loginAdmin@loginData');

Route::post('/login_Admin', 'loginAdmin@foo');


Route::get('auth/redirect', 'SocialAuthController@redirect');
Route::get('auth/callback', 'SocialAuthController@callback');

 Route::get('auth/gredirect', 'SocialAuthController@gredirect');
 Route::get('auth/gcallback', 'SocialAuthController@gcallback');

Route::get('auth/Tredirect', 'SocialAuthController@Tredirect');
Route::get('auth/Tcallback', 'SocialAuthController@Tcallback');

//Route::post('registerr', 'Auth\RegisterController@register');
Auth::routes();

Route::get('/home', 'HomeController@index');

