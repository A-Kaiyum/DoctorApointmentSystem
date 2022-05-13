<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\DonateBlood;
use App\Models\FindBlood;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public  function index(){

        $doctors = User::where('user_type','doctor')->get();
        return view('frontend.pages.index',compact('doctors'));
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
        if (Auth::check()){
            $appointment = Appointment::create($request->all());
            Session::flash('message','Appointment Success. Please Wait For Confirmation !');
            return redirect()->back();
        }else{
            Session::flash('message','You are not sign in!');
            return redirect()->back();
        }

    }
    public function createContact(Request $request){

        //dd($request->all());

        $appointment = Contact::create($request->all());

        if($appointment){

            Session::flash('message','Message Send Success. Please Wait !');
            return redirect()->back();
        }


    }
    public function findBlood(Request $request){

        //dd($request->all());

        $appointment = FindBlood::create($request->all());

        if($appointment){

            Session::flash('message','Message Send Success. Please Wait !');
            return redirect()->back();
        }


    }
    public function donateBlood(Request $request){

        //dd($request->all());

        $appointment = DonateBlood::create($request->all());

        if($appointment){

            Session::flash('message','Message Send Success. Please Wait !');
            return redirect()->back();
        }


    }



}
