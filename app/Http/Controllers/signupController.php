<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Models\User;

class signupController extends Controller
{
    public function Signup(Request $request){
    $this->validate($request, [
        'email'=>'required',
        'password'=>'required'
    ]);

    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);
    
    if($user){
        return redirect('login')->with('success','Your Signup Successfully');
    }else{
        return redirect('signup')->with('fail','Your Signup Failed');
    }


    }
}
