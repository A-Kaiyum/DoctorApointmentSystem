<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('blog-details', [FrontendController::class, 'singleBlog'])->name('singleBlog');
Route::get('our-services', [FrontendController::class, 'service'])->name('service');
Route::get('service', [FrontendController::class, 'singleService'])->name('singleService');
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('dr-details', [FrontendController::class, 'drProfile'])->name('drProfile');
Route::get('hospital', [FrontendController::class, 'hospital'])->name('hospital');
