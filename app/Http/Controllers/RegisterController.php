<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
   public function store(Request $request)
   {
       $request->validate([
           'username' => 'required|unique:logins,username',
           'email' => 'required|email|unique:logins,email',
           'role' => 'required|in:admin,user',
           'password' => 'required|min:6',
       ]);
       
       Login::create([
           'username' => $request->username,
           'email' => $request->email,
           'role' => $request->role,
           'password' => Hash::make($request->password),
       ]);

       return redirect()->route('login')->with('success', 'Registration successful! Please login.');
   }

}
