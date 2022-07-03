<?php

use Illuminate\Support\Facades\Route;

// Users API Routes
Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::group(['prefix' => '/users'], function () {
        Route::get('/', 'UserController@index')
            ->name('users.index')
            ->withoutMiddleware('auth:sanctum')
        ;

        Route::get('/{email}', 'UserController@show')->name('users.show');
    });

    Route::get('/me', 'UserController@me')->name('users.me');
});


Route::get('/', function () {
    return view('welcome');
})->name('index');