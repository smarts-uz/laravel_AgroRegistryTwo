<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->prefix('oneauth')->group(function() {
    Route::get('/index', 'OneAuthController@index')->name('oneauth.index');
    Route::get('/auth', 'OneAuthController@auth');
});
