<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class ApiRestaurantController extends Controller
{
    public function getRestaurantInformation($id)
    {
        $restaurant = Restaurant::find($id)->load('addresses', 'phones', 'images', 'categories');
        return $restaurant;
    }
    public function getRestaurantsWithFilter(Request $request)
    {
        try {
            $credentials = $request->validate([
                'type' => 'required|integer',
            ]);
            $category_id = $credentials['type'];
            $restaurant = Restaurant::whereHas('categories', function ($q) use ($category_id) {
                $q->where('id', $category_id);
            })->get()->load('categories');
            return response()->json($restaurant);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
    }
    public function getRestaurantsWithFoods($restaurant_id)
    {
        try {
            $category_id = $restaurant_id;
            $restaurant = Restaurant::where('id', $restaurant_id)->get()->load('foods');
            return response()->json($restaurant);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
    }
}
