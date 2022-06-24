<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showPageRegister()
    {
        return view('registerForm.form-register-wizard');
    }
    public function getPersonalInformation(Request $request)
    {
        try {
            $request->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|unique:users',
                'homePlace' => 'required',
                'phoneNumber' => 'required',
                'password' => 'min:6|required_with:confirmPassword|same:confirmPassword',
                'confirmPassword' => 'min:6'
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
            // TODO تنظیم کردن خطاها در سمت جاوااسکریپت وقتی ازا ین قسمت خطایی ارسال می شود
        }
        // return response()->json(
        //     $validated,
        //     200,
        //     ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        //     JSON_UNESCAPED_UNICODE
        // );
        try{
            $registerUser = new User;
            $registerUser->firstName = request('firstName');
            $registerUser->lastName = request('lastName');
            $registerUser->email = request('email');
            $registerUser->homePlace = request('homePlace');
            $registerUser->phone = request('phoneNumber');
            $registerUser->password = request('password');
            $registerUser->role = 'seller';
            $registerUser->save();
            return response()->json('allah');
         }
         catch(\Exception $e){
            return response()->json($e->getMessage());
         }
        
    }
}
