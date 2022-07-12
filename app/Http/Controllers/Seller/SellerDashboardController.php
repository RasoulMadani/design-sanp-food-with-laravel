<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ghaza;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function showDashboardPage()
    {
        return view('seller.dashboard');
    }
    public function showCreateFoodList()
    {
        $categories = Category::where('group', 'food')->get();
        return view('seller.showCreateFoodList', compact('categories'));
    }
    public function saveCreateFood(Request $request)
    {
        try {
            $request->validate([
                'foodName' => 'required',
                'ingredientsFood' => 'required',
                'image' => 'required|image|mimes:jpeg,jpg,svg,png,gif|required|max:10000',
                'foodPrice' => 'required|integer',
                'typeOfFood' => 'required|integer',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
            // TODO تنظیم کردن خطاها در سمت جاوااسکریپت وقتی ازا ین قسمت خطایی ارسال می شود
        }

        try {
            // TODO ثبت کردن شناسه کاربر صاحب رستوران که برای این کار فرد اول باید ورود کند و بعد رستوران بسازد
            $createFood = new Ghaza;
            $createFood->name = request('foodName');
            $createFood->user_id = Auth::id();
            $createFood->ingredient = request('ingredientsFood');
            $createFood->price = request('foodPrice');
            $createFood->save();
            $category = Category::find(request('typeOfFood'));
            $createFood->categories()->save($category);

            $imageFood = new Image;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('imageFood'), $filename);
                $imageFood->url = $filename;
            }
            $imageFood->save();
            $createFood->images()->save($imageFood);

            return response()->json(['allah' => 'save']);
            /**
              // https://www.vertabelo.com/blog/a-restaurant-delivery-data-model/
             */
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json(['allah' => 'dontSave']);
    }
}
