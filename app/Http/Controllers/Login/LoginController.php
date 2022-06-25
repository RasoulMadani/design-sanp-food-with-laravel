<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoignPage()
    {
        return view('loginForm.loginForm');
    }
    public function loginToAccount(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
                'password' => 'min:8|required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
            // TODO تنظیم کردن خطاها در سمت جاوااسکریپت وقتی ازا ین قسمت خطایی ارسال می شود
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['allah' => "loginuser",'url'=> route('admin.dashboard')]);
        }
        return response()->json(['allah' => "notexist"]);
    }
}
