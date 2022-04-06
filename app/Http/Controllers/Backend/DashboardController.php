<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public  function index(){
        return view('backend.pages.dashboard');
    }
    public  function profile(){
        $profile = User::where('id',auth()->user()->id)->first();
        return view('backend.pages.profile',compact('profile'));
    }
    public function profileUpdate(Request $request,$id){
$user = User::findOrfail($id);
        $user ->name = $request->name;
        $user-> email = $request->email;
        $user-> phone = $request->phone;


        if($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/images', $image_new_name);
            $user->image = '/storage/images/' . $image_new_name;

        }
        $user->save();
        Session::flash('success','profile updated Successfully');
        return redirect()->back();
    }

    public function test(){
        return "Okay";
    }
}
