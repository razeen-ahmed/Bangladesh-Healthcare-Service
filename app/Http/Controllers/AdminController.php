<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
{
    $doctor = new Doctor;

    $image = $request->file('file');

    // Debugging: Check if the file is being uploaded correctly
    // dd($image);

    if ($image) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();  
        $image->move('doctorimage', $imageName);
        $doctor->image = $imageName;
    }

    $doctor->name = $request->name;
    $doctor->phone = $request->number;
    $doctor->room = $request->room;
    $doctor->specialty = $request->speciality;
    $doctor->save();

    return redirect()->back();

}
public function showappointment(){
    $data=appointment::all();
    return view('admin.showappointment',compact('data'));
}
public function approved($id){
    $data=appointment::find($id);
    $data->status="approved";
    $data->save();
    return redirect()->back();

}

public function canceled($id){
    $data=appointment::find($id);
    $data->status="cancelled";
    $data->save();
    return redirect()->back();

}

}
