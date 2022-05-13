<?php


use App\Http\Controllers\Backend\Hospital\CategoryController;
use App\Http\Controllers\Backend\Hospital\ContactController;
use App\Http\Controllers\Backend\Hospital\DashboardController;
use App\Http\Controllers\Backend\Hospital\PostController;
use App\Http\Controllers\Backend\Hospital\TagController;
use App\Http\Controllers\Backend\Hospital\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'hospital/', 'as' => 'hospital.', 'middleware' => ['auth','hospital']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);
    Route::get('profile',[DashboardController::class,'profile'])->name('profile');
    Route::put('profileUpdate/{id}',[DashboardController::class,'profileUpdate'])->name('profileUpdate');

});
