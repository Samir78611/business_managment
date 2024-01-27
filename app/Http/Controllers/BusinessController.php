<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Business;

class BusinessController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:120',
            'address' => 'required|max:1000',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'contact_person' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        // Assuming you are using Jetstream or another authentication system
        $user = auth()->user();

        $business = $user->businesses()->create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'website' => $request->input('website'),
            'contact_person' => $request->input('contact_person'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return redirect('dashboard')->with('success','Business created successfully!');
    }
}
