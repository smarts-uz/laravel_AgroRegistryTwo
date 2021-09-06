<?php

use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\CompanyController;
use Modules\User\Http\Controllers\UserConfigController;
use Modules\User\Http\Controllers\UserProfileController;

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

Route::middleware(['auth', 'Impersonate'])->group(function () {
    Route::resource('user', 'UserController');

    Route::post("/user/restore/{user}", [UserController::class, 'restore'])->name('user.restore');
    Route::get("/user/actions/{user}", [UserProfileController::class, 'actions'])->name('user.actions');

    Route::get("/user/{user}", [UserProfileController::class, 'editExtra'])->name('user.show');
    Route::post("/user/update-extra/{user}", [UserProfileController::class, 'updateExtra'])->name('user.update-extra');

    Route::get("/user/config/{user}", [UserConfigController::class, 'edit'])->name('user.config.edit');
    Route::post("/user/config/{user}", [UserConfigController::class, 'update'])->name('user.config.update');

    Route::get("/user/company/{user}", [CompanyController::class, 'edit'])->name('user.company.edit');
    Route::post("/user/company/{user}", [CompanyController::class, 'update'])->name('user.company.update');
});

