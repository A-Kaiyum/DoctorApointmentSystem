<?php


use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['auth','admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile',[DashboardController::class,'profile'])->name('profile');
    Route::get('test',[DashboardController::class,'test'])->name('test');
    Route::put('profileUpdate/{id}',[DashboardController::class,'profileUpdate'])->name('profileUpdate');
    Route::resource('patient', PatientController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);
    Route::get('appointment',[AppointmentController::class,'index'])->name('appointment.all');


});
