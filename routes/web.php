<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\TagController;

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




Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('blog-details', [FrontendController::class, 'singleBlog'])->name('singleBlog');
Route::get('our-services', [FrontendController::class, 'service'])->name('service');
Route::get('service', [FrontendController::class, 'singleService'])->name('singleService');
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('dr-details', [FrontendController::class, 'drProfile'])->name('drProfile');
Route::get('hospital', [FrontendController::class, 'hospital'])->name('hospital');

// Backend Routes

//Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['auth']], function () {
//
//    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//    Route::resource('category',CategoryController::class);
//    Route::resource('tag',TagController::class);
//    Route::resource('post',PostController::class);
//    Route::resource('contact',ContactController::class);
//    Route::resource('user',UserController::class);
//
//});

Route::get('/', function () {
    // return view('welcome');

    if(Auth::user())
    {
        if(Auth::user()->user_type == 'admin')
        {
            return redirect()->route('admin.dashboard');
        }
        if(Auth::user()->user_type == 'doctor')
        {
            return redirect()->route('doctor.dashboard');
        }
    }
    else
    {
        return view('frontend.pages.index');
    }

})->name('frontend.index');



require __DIR__.'/admin.php';
require __DIR__.'/doctor.php';
