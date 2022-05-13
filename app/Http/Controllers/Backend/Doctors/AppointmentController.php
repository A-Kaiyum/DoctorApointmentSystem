<?php

namespace App\Http\Controllers\Backend\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::where('doctor_id',Auth::user()->id)->get();
        return view('backend.doctors.pages.appointments',compact('appointments'));
    }

    public function completed(){
        $appointments = Appointment::orderBy('id','DESC')->where('doctor_id',Auth::user()->id)->where('status',1)->get();
        return view('backend.doctors.pages.appointments',compact('appointments'));
    }
    public function pending(){
        $appointments = Appointment::orderBy('id','DESC')->where('doctor_id',Auth::user()->id)->where('status',0)->get();
        return view('backend.doctors.pages.appointments',compact('appointments'));
    }
    public function accept($id){
        $appointments = Appointment::where('id',$id)->where('doctor_id',Auth::user()->id)->update(['status'=>1]);
        return response()->json([
            'status' => 200,
            Session::flash('success','Accpeted Successfully'),
        ]);
    }
    public function reject($id){
        $res = Appointment::destroy($id);
        if($res){
            return response()->json([
                Session::flash('success','Successfully Rejected'),
            ]);
        }
    }
}
