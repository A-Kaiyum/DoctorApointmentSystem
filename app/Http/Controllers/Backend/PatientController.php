<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function index(){
        $patientList = User::orderBy('id','DESC')->where('user_type','patient')->get();
        return  view('backend.pages.patient',compact('patientList'));
    }

    public function show(User $patient)
    {
        return view('backend.pages.showPatient',compact('patient'));
    }
    public function edit(User $patient){
        return view('backend.pages.editPatient',compact('patient'));
    }
    public function update(Request $request, User $patient){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>"required|email|unique:patients,email,$patient->id",
        ]);

        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->password = bcrypt($request->passowrd);
        $patient->status = $request->status;

        $patient->save();

        Session::flash('success','Patient Updated Successfully');
        return redirect()->back();
    }
    public function destroy(User $patient){
        if($patient){
            $patient->delete();
            Session::flash('success','Patient Deleted Successfully');
        }
        return redirect()->back();
    }
}
