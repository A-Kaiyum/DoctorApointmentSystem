<?php

use App\Http\Controllers\Backend\Patient\AppointmentController;
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
    Route::get('appointment',[AppointmentController::class,'index'])->name('appointment.all');

    Route::get('profile',[DashboardController::class,'profile'])->name('profile');
    Route::put('profileUpdate/{id}',[DashboardController::class,'profileUpdate'])->name('profileUpdate');

});
