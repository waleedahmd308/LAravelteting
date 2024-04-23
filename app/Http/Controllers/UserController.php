<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    { 
        
          // Check if the user with the provided email already exists
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                "message" => "user already exists"
            ], 400);
        }
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
         $user->phone = $request->phone;
        $user->password = $request->password;
       
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        

        $user->save();
         return response()->json([
            "message" => "user record created"
        ], 201);
        
    }
}
