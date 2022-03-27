<?php

use App\Http\Controllers\Backend\Patient\CategoryController;
use App\Http\Controllers\Backend\Patient\ContactController;
use App\Http\Controllers\Backend\Patient\DashboardController;
use App\Http\Controllers\Backend\Patient\PostController;
use App\Http\Controllers\Backend\Patient\TagController;
use App\Http\Controllers\Backend\Patient\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'patient/', 'as' => 'patient.', 'middleware' => ['auth','patient']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);

});
