<?php

namespace App\Http\Controllers\Backend\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::where('doctor_id',Auth::user()->id)->get();
        return view('backend.doctors.pages.appointments',compact('appointments'));
    }
}
