<?php

namespace App\Http\Controllers\Backend\Patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::where('id',Auth::user()->id)->get();
        return view('backend.patients.pages.appointments',compact('appointments'));
    }
}
