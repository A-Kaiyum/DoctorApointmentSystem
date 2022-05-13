<?php


use App\Http\Controllers\Backend\Doctors\AppointmentController;
use App\Http\Controllers\Backend\Doctors\CategoryController;
use App\Http\Controllers\Backend\Doctors\ContactController;
use App\Http\Controllers\Backend\Doctors\DashboardController;
use App\Http\Controllers\Backend\Doctors\PostController;
use App\Http\Controllers\Backend\Doctors\TagController;
use App\Http\Controllers\Backend\Doctors\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'doctor/', 'as' => 'doctor.', 'middleware' => ['auth','doctor']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('patient-list', [DashboardController::class, 'patientList'])->name('patientList');

    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);
    Route::get('appointment',[AppointmentController::class,'index'])->name('appointment.all');
    Route::get('completed',[AppointmentController::class,'completed'])->name('appointment.completed');
    Route::get('pending',[AppointmentController::class,'pending'])->name('appointment.pending');

    Route::get('profile',[DashboardController::class,'profile'])->name('profile');
    Route::put('profileUpdate/{id}',[DashboardController::class,'profileUpdate'])->name('profileUpdate');

});
