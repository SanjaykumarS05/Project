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
        $company = "Tech Solutions Inc.";
        $address = "1234 Tech Street, Silicon Valley, CA 94043";

        return view('admin.about', compact('company', 'address'));
    }
    public function contact()
    {
        $phone = "123-456-7890";
        $email = "contact@techsolutions.com";
        $address = "1234 Tech Street, Silicon Valley, CA 94043";
        return view('admin.contact', compact('phone', 'email', 'address'));
    }
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
