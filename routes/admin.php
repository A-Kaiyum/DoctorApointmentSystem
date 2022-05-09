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
use App\Http\Controllers\Backend\FindBloodController;
use App\Http\Controllers\Backend\FindDonerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['auth','admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile',[DashboardController::class,'profile'])->name('profile');
    Route::get('profile-image',[DashboardController::class,'sideBarImage'])->name('sideBarImage');
    Route::get('test',[DashboardController::class,'test'])->name('test');
    Route::put('profileUpdate/{id}',[DashboardController::class,'profileUpdate'])->name('profileUpdate');
    Route::resource('patient', PatientController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('post',PostController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('user',UserController::class);
    Route::resource('findBlood',FindBloodController::class);
    Route::resource('findDoner',FindDonerController::class);
    Route::get('doctor-registration',[DoctorController::class,'registration'])->name('registration');
    Route::get('appointment',[AppointmentController::class,'index'])->name('appointment.all');
    Route::get('completed',[AppointmentController::class,'completed'])->name('appointment.completed');
    Route::get('pending',[AppointmentController::class,'pending'])->name('appointment.pending');
    Route::put('accept/{id}',[AppointmentController::class,'accept'])->name('appointment.accept');
    Route::DELETE('reject/{id}',[AppointmentController::class,'reject'])->name('appointment.reject');
    Route::put('accepted/{id}',[DoctorController::class,'accept'])->name('doctor.accept');
    Route::DELETE('rejected/{id}',[DoctorController::class,'reject'])->name('doctor.reject');


});
