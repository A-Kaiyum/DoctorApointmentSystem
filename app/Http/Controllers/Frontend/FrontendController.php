<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
