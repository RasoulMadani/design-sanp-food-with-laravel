<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Category;

class RestaurantInformationController1 extends Controller
{
    public function getRestaurantInformations()
    {
        $restaurantInformation = Restaurant::where('id', request('id'))->with('categories', 'addresses', 'phones', 'images')->first();
        $restaurantCategories = Category::where('group', 'restaurant')->get();
        return response()->json(['allah' => 'perform', 'restaurantInformation' => $restaurantInformation, 'restaurantCategories' => $restaurantCategories]);
    }
    public function saveRestaurantInformations()
    {
        return response()->json('allah');
    }
}
