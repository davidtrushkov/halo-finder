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

Route::get('/', '\App\Http\Controllers\HomeController@index');


// Authentication Routes
Route::post('/register', [
    'uses' => '\App\Http\Controllers\Auth\AuthController@postRegister',
    'as'   => 'auth.register',
]);
Route::post('/login', [
    'uses' => '\App\Http\Controllers\Auth\AuthController@postLogin',
    'as'   => 'auth.login',
]);
Route::get('/logout', [
    'uses' => '\App\Http\Controllers\Auth\AuthController@logout',
    'as'   => 'auth.logout',
]);


// Profile Routes
Route::get('/profile/{slug}', [
    'uses' => '\App\Http\Controllers\ProfileController@index',
    'as' => 'user.profile'
]);


Route::post('/chat', [
    'uses' => '\App\Http\Controllers\ChatController@sendMessage',
    'as' => 'chat.send'
]);