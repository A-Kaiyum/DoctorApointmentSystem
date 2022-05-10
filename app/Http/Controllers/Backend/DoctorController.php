<?php

namespace App\Http\Controllers\Backend;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\Util\Str;

class DoctorController extends Controller
{
    public function index(){
        $doctorList = User::orderBy('id','DESC')->where('user_type','doctor')->where('status',1)->get();
        return  view('backend.pages.doctor',compact('doctorList'));
    }

    public function show(User $doctor)
    {

        return view('backend.pages.showDoctor',compact('doctor'));
    }
    public function doctorRegistration()
    {
        $appointments = User::orderBy('id','DESC')->where('user_type','doctor')->where('status',0)->get();
        return view('backend.pages.doctorRegistration',compact('appointments'));
    }
    public function edit(User $doctor){
        return view('backend.pages.editDoctor',compact('doctor'));
    }
    public function update(Request $request, User $doctor){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>"required|email|unique:doctors,email,$doctor->id",
        ]);

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->passowrd);
        $doctor->status = $request->status;

        $doctor->save();

        Session::flash('success','User Updated Successfully');
        return redirect()->back();
    }

    public function accept($id){

        $appointments = User::where('id',$id)->update(['status'=>1,
            'doctor_id' => random_int(10000,999999)]);
        if($appointments){

            Session::flash('success','Doctor Accepted');
            return redirect()->back();
        }

    }
    public function reject($id){
        $res = User::destroy($id);
        if($res){
            Session::flash('success','Doctor Rejected');
            return redirect()->back();
        }
    }

    public function destroy(User $doctor){
        if($doctor){
            $doctor->delete();
            Session::flash('success','User Deleted Successfully');
        }
        return redirect()->back();
    }
}
