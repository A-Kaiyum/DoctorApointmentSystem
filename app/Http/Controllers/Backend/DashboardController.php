<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public  function index(){
        return view('backend.pages.dashboard');
    }
    public  function profile(){
        $profile = User::where('id',auth()->user()->id)->first();
        return view('backend.pages.profile',compact('profile'));
    }
}
