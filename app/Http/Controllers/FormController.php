<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function string()
    {
        return "Hello, this is a simple string response from the controller!";
    }

    public function redirect()
    {
        return redirect()->route('homepage');
    }

    public function json()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'role' => 'Administrator'
        ];
        return response()->json($data);
    }
    public function custom()
    {
        try {
            $filePath = storage_path('/Laravel.pdf');
            $filename = 'Laravel.pdf';
            $headers = ['Content-Type' => 'application/pdf'];
            return response()->download($filePath, $filename, $headers);
        } catch (\Exception $e) {
            return response("<div style='font-family:sans-serif; color:red; padding:20px;'>
                    <h2>Error Downloading PDF</h2>
                    <p>{$e->getMessage()}</p>
                    </div>", 500)->header('Content-Type', 'text/html');
        }
    }
    public function view()
    {
        return view('admin.homepage');
    }
    public function response()
    {
        return view('admin.response');
    }

}