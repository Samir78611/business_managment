<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\Business;

class dashboardController extends Controller
{
    public function Index(){
        if(Auth::check()){
            $businesses=Business::all();
            return view('dashboard',compact('businesses'));
        }
    }
    public function Logout(){
        if(Auth::check()){
            $user=Auth::logout();
            return redirect(url('login'))->with('success','Logout Successfully');
        }else{
            return redirect(url('dashboard'))->with('fail','Logout Failed');
        }
    }
}
