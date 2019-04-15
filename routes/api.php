<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::resource('post', 'PostController');
    Route::group(['prefix' => 'user'], function () {
        Route::post('profile', 'UserController@updateProfile');
        Route::post('change-password', 'UserController@changePassword');
    });
});