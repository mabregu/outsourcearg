<?php

use Illuminate\Support\Facades\Route;

// Users API Routes
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => '/users', 'name' => 'users.'], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/{email}', 'UserController@show')->name('show');
    });

    Route::get('/me', 'UserController@me')->name('me');
});


Route::get('/', function () {
    return view('welcome');
})->name('index');
