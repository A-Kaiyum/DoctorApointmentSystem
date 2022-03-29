<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public  function index(){
        return view('frontend.pages.index');
    }
    public  function about(){
        return view('frontend.pages.about');
    }
    public  function blog(){
        return view('frontend.pages.blog');
    }
    public  function singleBlog(){
    return view('frontend.pages.singleBlog');
    }
    public  function service(){
        return view('frontend.pages.service');
    }
    public  function singleService(){
        return view('frontend.pages.singleService');
    }
    public  function contact(){
        return view('frontend.pages.contact');
    }
    public  function hospital(){
        return view('frontend.pages.hospital');
    }
    public  function drProfile(){
        return view('frontend.pages.drProfile');
    }
    public function makeAppointment(Request $request){

        //dd($request->all());

        $appointment = Appointment::create($request->all());

        Session::flash('message','Appointment Success. Please Wait For Confirmation !');
        return redirect()->back();
    }

}
