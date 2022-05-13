<?php

namespace App\Http\Controllers\Backend\Doctors;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public  function index(){
        return view('backend.doctors.pages.dashboard');
    }
    public  function patientList(){
        return view('backend.doctors.pages.dashboard');
    }
    public  function profile(){
        $profile = User::where('id',auth()->user()->id)->first();
        return view('backend.doctors.pages.profile',compact('profile'));
    }
    public  function sideBarImage(){
        $profile = User::where('id',auth()->user()->id)->first();
        return view('backend.layouts._sidebar',compact('profile'));
    }
    public function profileUpdate(Request $request,$id){
        $user = User::findOrfail($id);
        $user ->name = $request->name;
        $user ->hospitalName = $request->hospitalName;
        $user ->designation = $request->designation;
        $user ->department = $request->department;
        $user ->degree = $request->degree;
        $user ->age = $request->age;
        $user ->address = $request->address;
        $user ->workingDays = $request->workingDays;
        $user-> email = $request->email;
        $user-> phone = $request->phone;
        $user-> status = 0;


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
}
