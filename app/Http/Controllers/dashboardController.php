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
}
