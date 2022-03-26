<?php

namespace App\Http\Controllers\Backend\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index(){
        return view('backend.doctors.pages.dashboard');
    }
}
