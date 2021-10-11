<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'Api\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function () {

    Route::post('/logout', 'Api\AuthController@logout');
    Route::post('/me', 'Api\AuthController@me');
    Route::post('/refresh', 'Api\AuthController@refresh');

    Route::post('/balance', 'Api\AccountController@showBalance');
    Route::post('/deposit', 'Api\AccountController@deposit');
    Route::post('/withdraw', 'Api\AccountController@withdraw');
    Route::post('/movements', 'Api\AccountController@getMovementsByUser');

});



