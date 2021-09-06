<?php

use Modules\Impersonate\Http\Controllers\ImpersonateController;

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

Route::prefix('impersonate')->middleware(['auth', 'Impersonate'])->group(function() {
    Route::get('/list', [ImpersonateController::class, 'index'])->name('impersonate.index');
    Route::get('/start/{user}', [ImpersonateController::class, 'start'])->name('impersonate.start');
    Route::get('/stop', [ImpersonateController::class, 'stop'])->name('impersonate.stop');
});
