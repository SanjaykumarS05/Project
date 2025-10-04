<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function homepage()
    {
        return view('admin.homepage');
    }
    public function about()
    {
        $company = "Rsoft Pvt. Ltd.";
        $address = "Tidel Park, Pattabiram, Chennai, India";

        return view('admin.about', compact('company', 'address'));
    }
    
    public function contact()
    {
        $phone = "+91 77081 51456";
        $email = "rsoftai@gmail.com";
        $address = "Pattabiram, Avadi, Chennai, India";
        return view('admin.contact', compact('phone', 'email', 'address'));
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
