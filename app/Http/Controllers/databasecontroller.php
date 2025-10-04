<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class databasecontroller extends Controller
{
    public function check(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = login::where('username', $username)->first();   

        if ($user && Hash::check($password, $user->password)) {
            return redirect()->route('homepage');
        } else {
            return redirect()->route('login')->with('error', 'Invalid username or password');
        }
    }
}
