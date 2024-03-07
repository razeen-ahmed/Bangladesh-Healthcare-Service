<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){

        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='0'){
                return view('user.home');
            }

            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        return view('user.home');
    }
}
