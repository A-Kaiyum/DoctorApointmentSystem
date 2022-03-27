<?php

namespace App\Http\Controllers\Backend\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index(){
        return view('backend.hospitals.pages.dashboard');
    }
}
