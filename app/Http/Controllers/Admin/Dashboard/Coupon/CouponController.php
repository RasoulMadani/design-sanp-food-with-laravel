<?php

namespace App\Http\Controllers\Admin\Dashboard\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function saveCoupon(Request $request)
    {
        try {
            $credentials = $request->validate([
                'copounName' => 'required|string',
                'copounCode' => 'nullable|string',
                'copounPersent' => 'nullable|string',
                'copounPrice' => 'nullable|string'
            ]);
            $createCoupon = new Coupon;
            $createCoupon->name = $credentials['copounName'];
            $createCoupon->code = $credentials['copounCode'];
            $createCoupon->persent = $credentials['copounPersent'];
            $createCoupon->price = $credentials['copounPrice'];
            $createCoupon->save();
            return response()->json(['allah' => 'perform']);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        return response()->json(['allah' => 'dontSave']);
    }
    public function showCategoryList()
    {
        $categories = Category::all();
        return view('admin.showCategoryList', compact('categories'));
    }
    public function editCategoryList(Request $request)
    {
        try {
            $credentials = $request->validate([
                'id' => 'required|integer'
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        try {
            $categories = Category::find(request('id'));
            $categories->name = request('newCategoryName');
            $categories->save();
            return response()->json(['allah' => 'ok']);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json(['allah' => 'false']);
    }
}
