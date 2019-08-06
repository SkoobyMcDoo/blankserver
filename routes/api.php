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

//Auth API
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Auth\APIController@login');
    Route::post('signup', 'Auth\APIController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'Auth\APIController@logout');
        Route::get('user', 'Auth\APIController@user');
    });
});
