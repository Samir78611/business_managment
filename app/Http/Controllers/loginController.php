<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Auth;

class loginController extends Controller
{
    public function LoginUser(Request $request){
    $this->validate($request, [
        'email'=>'required',
        'password'=>'required'
]);
    $email=$request->input('email');
    $password=$request->input('password');

    $credentials=$request->only('email','password');

    if(Auth::attempt($credentials)){
        return redirect('dashboard')->with('success','Welcome');
    }else{
        return redirect('login')->with('fail','login Failed');
    }
    }
}
