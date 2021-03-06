<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'is_admin'], function() {
        Route::get('reports', [\App\Http\Controllers\Admin\ReportController::class, 'index']);
    });

    Route::get('profile', [\App\Http\Controllers\User\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile.update');
    Route::get('users', [\App\Http\Controllers\User\UserController::class, 'index'])->name('users.index');
});

require __DIR__.'/auth.php';
