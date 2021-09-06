<?php

use Modules\Region\Http\Controllers\DistrictController;

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

Route::prefix('region')->middleware(['auth', 'Impersonate', 'permission:create region'])->group(function() {
    Route::get('/district/index', [DistrictController::class, 'index'])->name('district.index');
    Route::post('/district/store', [DistrictController::class, 'store'])->name('district.store');
});
