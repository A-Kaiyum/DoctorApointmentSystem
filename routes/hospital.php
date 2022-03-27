<?php


use App\Http\Controllers\Backend\Hospital\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'hospital/', 'as' => 'hospital.', 'middleware' => ['auth','hospital']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);

});
