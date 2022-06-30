<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;

class ApiUserController extends Controller
{
    public function getAddresses()
    {
        $addresses = Address::all();
        return response()->json($addresses);
    }
    public function addAddress(Request $request)
    {
        try {
            $credentials = $request->validate([
                'title' => 'required|string',
                'address' => 'required|string',
                'latitude' => 'required|integer',
                'longitude' => 'required|integer',
            ]);
            $registerAddress = new Address;
            $registerAddress->lat = request('latitude');
            $registerAddress->lang = request('longitude');
            $registerAddress->textAddress = request('address');
            $registerAddress->save();
            return response()->json('نشانی اضافه شد ');
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
    }
    public function setDefaultAddress(Address $id)
    {
        try {
            $id->defaultAddress = 1;
            $id->save();
            return response()->json('address set default address');
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
    }
}
