<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  frontend Routes

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('about-us', [FrontendController::class, 'about'])->name('about');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('blog-details', [FrontendController::class, 'singleBlog'])->name('singleBlog');
Route::get('our-services', [FrontendController::class, 'service'])->name('service');
Route::get('service', [FrontendController::class, 'singleService'])->name('singleService');
Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact-create', [FrontendController::class, 'createContact'])->name('contact.create');
Route::get('dr-details', [FrontendController::class, 'drProfile'])->name('drProfile');
Route::get('hospital', [FrontendController::class, 'hospital'])->name('hospital');
Route::post('appointment', [FrontendController::class, 'makeAppointment'])->name('appointment');


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
        }if(Auth::user()->user_type == 'hospital')
    {
        return redirect()->route('hospital.dashboard');
    }
        if(Auth::user()->user_type == 'patient')
    {
        return redirect()->route('patient.dashboard');
    }
    }
    else
    {
        return view('frontend.pages.index');
    }

})->name('frontend.index');



require __DIR__.'/admin.php';
require __DIR__.'/doctor.php';
require __DIR__.'/hospital.php';
require __DIR__.'/patient.php';
