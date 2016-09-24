<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('auth/redirect', 'SocialAuthController@redirect');
Route::get('auth/callback', 'SocialAuthController@callback');

 Route::get('auth/gredirect', 'SocialAuthController@gredirect');
 Route::get('auth/gcallback', 'SocialAuthController@gcallback');

 Route::get('auth/Tredirect', 'SocialAuthController@Tredirect');
 Route::get('auth/Tcallback', 'SocialAuthController@Tcallback');

//Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');