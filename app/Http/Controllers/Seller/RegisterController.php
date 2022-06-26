<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Address;
use App\Models\Phone;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showPageRegister()
    {
        $categories = Category::where('group', 'restaurant')->get();
        return view('registerForm.form-register-wizard', compact('categories'));
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
        try {
            $registerUser = new User;
            $registerUser->firstName = request('firstName');
            $registerUser->lastName = request('lastName');
            $registerUser->email = request('email');
            $registerUser->homePlace = request('homePlace');
            $registerUser->phone = request('phoneNumber');
            // TODO هش کردن رمز عبور
            $registerUser->password = request('password');
            $registerUser->role = 'seller';
            $registerUser->save();
            return response()->json('allah');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    public function getRastaurantInformation(Request $request)
    {
        try {
            $request->validate([
                'typeOfRestaurant' => 'required|integer',
                'restaurantName' => 'required|string',
                'bankAccountNumber' => 'required|integer',
                'restaurantAddress' => 'required|string',
                'phoneNumberRestaurant' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
            // TODO تنظیم کردن خطاها در سمت جاوااسکریپت وقتی ازا ین قسمت خطایی ارسال می شود
        }
        try {
            $registerRestaurant = new Restaurant;
            $registerRestaurant->name = request('restaurantName');
            $registerRestaurant->phone = request('phoneNumberRestaurant');
            $registerRestaurant->address = request('restaurantAddress');
            $registerRestaurant->account_payment = request('bankAccountNumber');
            $registerRestaurant->save();
            $category = Category::find(request('typeOfRestaurant'));
            $registerRestaurant->categories()->save($category);
            $registerRestaurantAddress = new Address;
            $registerRestaurantAddress->lat = 1;
            $registerRestaurantAddress->lang = 2;
            $registerRestaurantAddress->save();
            $registerRestaurant->addresses()->save($registerRestaurantAddress);
            $registerRestaurantPhone = new Phone;
            $registerRestaurantPhone->phoneNumber = request('phoneNumberRestaurant');
            $registerRestaurantPhone->save();
            $registerRestaurant->phones()->save($registerRestaurantPhone);
            return response()->json('allah');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
