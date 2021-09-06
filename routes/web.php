<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\auth\VoyagerEriController;
use App\Http\Controllers\admin\VoyagerSearchController;
use App\Services\ActivityServise;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('site/mainsection');
});
Route::get('history', function () {
    return view('site/history');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('eri/login', [VoyagerEriController::class, 'index'])->name('eri.login');
    Route::post('eri/login', [VoyagerEriController::class, 'auth'])->name('eri.login');
    Route::get("/search", [VoyagerSearchController::class,"indexSearch"]);
    Route::get("/form", [VoyagerSearchController::class,"indexForm"]);
    Route::get("/search/all", [VoyagerSearchController::class,"ShowSearch"]);

});

Route::group(["prefix" => '/'], function () {
    $activity = new ActivityServise();

    $activity->getActivity();
});

Route::view("/site", "site");
