<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Staff;

use App\Models\Appointment;
class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

     public function addstaffview(){
        return view('admin.add_staff');
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

    public function upload_staf(Request $request)
    {
        $staff=new staff;

        $image=$request->file;

        if ($image) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();  
        $image->move('staffimage', $imageName);
        $staff->image = $imageName;
    }

    $staff->name = $request->name;
    $staff->phone = $request->number;
    $staff->room = $request->room;
    $staff->dob=$request->dob;
    $staff->designation = $request->designation;
    $staff->save();

    return redirect()->back();

    }

    // show staff
    public function showstaff()
    {
        $data = staff::all();

        return view('admin.showstaff',compact('data'));
    }

    //delete staff
    public function deletestaff($id)
    {
        $data = staff::find($id);
        $data ->delete();


        return redirect()->back();
    }
    
    //update staff
    public function updatestaff($id)
    {
        $data = staff::find($id);
        

     
        return view('admin.update_staff',compact('data'));
    }

    public function editstaff(Request $request,$id)
    {
        $staff = staff::find($id);
        
        $staff->name=$request->name;

        $staff->phone=$request->phone;

        $staff->designation=$request->designation;

        $staff->room=$request->room;

        

        $image=$request->file;
        
        if($image)
        {
        $imagename =time().'.'.$image->getOriginalClientExpansion();

        $request->file->move('staffimage', $imagename);

        $staff->image=$imagename;
        }

        $staff->save();

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
