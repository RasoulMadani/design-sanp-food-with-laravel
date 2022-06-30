<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Address;
use App\Models\Phone;
use Illuminate\Support\Facades\Auth;
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
                'email' => 'required|email|unique:users',
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
            $registerUser->password = request('password');
            $registerUser->role = 'seller';
            $registerUser->save();
            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                $request->session()->regenerate();
            } else {
                return response()->json(['allah' => "userExist"]);
            }
            $registerUserAddress = new Address;
            // TODO اضافه کردن طول و عرض جغرافیایی به نشانی ها
            $registerUserAddress->lat = 1;
            $registerUserAddress->lang = 2;
            $registerUserAddress->textAddress = request('homePlace');
            $registerUserAddress->save();
            $registerUser->addresses()->save($registerUserAddress);
            $registerUserPhone = new Phone;
            $registerUserPhone->phoneNumber = request('phoneNumber');
            $registerUserPhone->save();
            $registerUser->phones()->save($registerUserPhone);
            return response()->json(['allah' => 'save']);
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
            // TODO ثبت کردن شناسه کاربر صاحب رستوران که برای این کار فرد اول باید ورود کند و بعد رستوران بسازد
            $registerRestaurant = new Restaurant;
            $registerRestaurant->name = request('restaurantName');
            $registerRestaurant->user_id = Auth::id();
            $registerRestaurant->phone = request('phoneNumberRestaurant');
            $registerRestaurant->address = request('restaurantAddress');
            $registerRestaurant->account_payment = request('bankAccountNumber');
            $registerRestaurant->save();
            $category = Category::find(request('typeOfRestaurant'));
            $registerRestaurant->categories()->save($category);
            $registerRestaurantAddress = new Address;
            $registerRestaurantAddress->lat = 1;
            $registerRestaurantAddress->lang = 2;
            $registerRestaurantAddress->textAddress = request('restaurantAddress');
            $registerRestaurantAddress->save();
            $registerRestaurant->addresses()->save($registerRestaurantAddress);
            $registerRestaurantPhone = new Phone;
            $registerRestaurantPhone->phoneNumber = request('phoneNumberRestaurant');
            $registerRestaurantPhone->save();
            $registerRestaurant->phones()->save($registerRestaurantPhone);
            return response()->json(['allah' => 'perform']);
            /**
              // https://www.vertabelo.com/blog/a-restaurant-delivery-data-model/
             */
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
