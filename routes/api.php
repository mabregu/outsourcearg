<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Users API Routes
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => '/users'], function () {
        Route::get('/', 'UserController@index')->name('users.index')->withoutMiddleware('auth:sanctum');
        Route::get('/{email}', 'UserController@show')->name('users.show')->withoutMiddleware('auth:sanctum');
        Route::post('/', 'UserController@store');
        Route::put('/{email}', 'UserController@update');
        Route::delete('/{email}', 'UserController@destroy');

        //Get user
        Route::get('/me', 'UserController@me')->name('users.me');
    });

    Route::get('/only-authenticate', 'UserController@onlyAuthenticate')->name('users.only-authenticate');
});

Route::get('/', function () {
    return view('welcome');
})->name('index');