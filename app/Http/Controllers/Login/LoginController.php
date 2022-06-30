<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
                // email
                'email' => 'required|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
                'password' => 'required|min:8',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
            // TODO تنظیم کردن خطاها در سمت جاوااسکریپت وقتی ازا ین قسمت خطایی ارسال می شود
        }
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['allah' => "loginuser"]);
        }
        // $karbar = User::where('email', request('email'))->first();
        // if (auth()->user()->password == request('password')) {
        // if ($karbar) {
        //     Auth::login($karbar, $remember = true);
        //     $request->session()->regenerate();
        // }
        return response()->json(['allah' => "notexist"]);
    }
}
