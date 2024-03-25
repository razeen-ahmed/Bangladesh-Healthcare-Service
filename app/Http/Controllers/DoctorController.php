<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Report;
use App\Models\Appointment;
class DoctorController extends Controller
{
    public function makereport(){
        return view('doctor.make_report');
    }

    public function make_report(Request $request){
        $report = new Report;
        $image = $request->file('file');

    // Debugging: Check if the file is being uploaded correctly
    // dd($image);

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();  
            $image->move('signature', $imageName);
            $report->image = $imageName;
        }

        $report->name = $request->name;
        $report->dob = $request->dob;
        $report->phone = $request->phone;
        $report->room = $request->room;
        $report->age = $request->age;
        $report->email = $request->email;
        $report->symptoms = $request->symptoms;
        $report->prescription = $request->prescription;
        $report->medical_history = $request->medical_history;
        $report->treated_by = $request->treated_by;
        $report->save();

        return redirect()->back();

    }

    public function show_report()
    {
        if(Auth::id())
        {
            $name=Auth::user()->name;
            $report=report::where('treated_by',$name)->get();
            return view('doctor.show_report',compact('report'));
        }
        else{
            return redirect()->back();
        }
    }

    public function updatereport($id){
        $data=report::find($id);
        return view('doctor.update_report',compact('data'));
    }

    public function editreport(Request $request, $id){
        $report=report::find($id);
        $image = $request->file('file');
    
        // Debugging: Check if the file is being uploaded correctly
        // dd($image);
    
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();  
            $image->move('signature', $imageName);
            $report->image = $imageName;
        }
    
        $report->name = $request->name;
        $report->dob = $request->dob;
        $report->phone = $request->phone;
        $report->room = $request->room;
        $report->age = $request->age;
        $report->email = $request->email;
        $report->medical_history = $request->medical_history;
        $report->symptoms = $request->symptoms;
        $report->prescription = $request->prescription;
        $report->save();
    
        return redirect()->back();
    
    }

    public function show_appointment(){
        if(Auth::id())
        {
            $name=Auth::user()->name;
            $data=appointment::where('doctor',$name)->get();
            return view('doctor.show_appointment',compact('data'));
        }
        else{
            return redirect()->back();
        }
    }
}
