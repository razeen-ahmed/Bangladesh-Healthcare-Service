<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Post;
use App\Models\Report;
use App\Models\tests;

class HomeController extends Controller
{
    public function redirect(){

        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            $username=Auth()->user()->name;
            if($usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            if($usertype=='2'){
                return view('doctor.home');
            }

            else{
                return view('admin.home',['username' => $username]);
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id())
        {
            return redirect('home');
        }
        else{
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
        }
    }
    public function appointment(Request $request)
    {
        $data=new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->dob=$request->dob;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';

        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message','Appointment successful. We will contact with you soon');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

     public function myreport()
    {
        if(Auth::id())
        {
            $email=Auth::user()->email;
            $report=report::where('email',$email)->get();
            return view('user.my_report',compact('report'));
        }
        else{
            return redirect()->back();
        }
    }

    
    public function download($id)
    {
        // Fetch report data from the database based on the ID
        $report = Report::select('name', 'age', 'dob', 'prescription', 'created_at')->find($id);

        // Check if report exists
        if (!$report) {
            abort(404); // Report not found
        }

        // Convert report data to array
        $reportData = $report->toArray();

        // Set headers for download
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="report_' . $id . '.csv"',
        ];

        // Generate CSV file content
        $callback = function () use ($reportData) {
            $file = fopen('php://output', 'w');
            // Write CSV headers
            fputcsv($file, array_keys($reportData)); // Assuming column names are keys of report data array
            // Write CSV data
            fputcsv($file, $reportData);
            fclose($file);
        };

        // Return CSV file as response
        return response()->stream($callback, 200, $headers);
    }

    public function comment()
    {
        {
            $post=Post::all();
            return view('comment',compact('post'));
        }
    }

    public function searchdoctor(Request $request)
    {
        {   $search = $request['search'] ?? "";
            if($search!=""){
                $data = doctor::where('name','LIKE',"%$search%")->get();
            }
            else{
                $data = doctor::all();
            }
            return view('user.searchdoctor',compact('data'));
        }
    }

    //Nuhan changes-->

    public function show_test_view_controller(){
        $tests = tests::all();
        $cart = session()->get("new_cart");
        if ($cart !== null) {
            $testCarts = tests::whereIn('id', array_keys($cart))->get()->map(function($test) use ($cart) {
                $test->quantity = $cart[$test->id];
                $test->total = $test->quantity * $test->price;
                return $test;
            });
        } else {
            $testCarts = collect(); // or any default value or behavior you want
        }

        $totalAmount = $testCarts->sum('total');

        return view('user.show_test',compact('tests', 'testCarts', 'totalAmount'));
    }

    // public function show_doctor_list_controller(){
    //     $doctors = Doctor::all();
    //     return view('user.show_doctor_list',compact('doctors'));
    // }

    public function cart(Request $request)
    {
        // Retrieve cart items from the session
        $cart = $request->session()->get('cart', []);

        // You can perform any additional processing here, such as calculating the total price

        // Return a view to display the cart with the cart items
        return view('cart', ['cart' => $cart]);
    }

    public function report_delete($id){
        $data=report::find($id);
        $data->delete();
        return redirect()->back();
    }


}
