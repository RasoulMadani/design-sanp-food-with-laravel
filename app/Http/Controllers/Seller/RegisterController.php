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
    public function getPersonalInformation()
    {
        $registerUser = new User;
        $registerUser->firstName = request('firstName');
        $registerUser->lastName = request('lastName');
        $registerUser->email = request('email');
        $registerUser->homePlace = request('homePlace');
        $registerUser->phone = request('phoneNumber');
        $registerUser->password = request('password');
        $registerUser->role = 'seller';
        $registerUser->save();
    }
}
