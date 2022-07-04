<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;

class MenuController extends Controller
{
    public function getRestaurants()
    {
        $restaurants = Restaurant::where('user_id', auth()->user()->id)->get();
        return response()->json(['allah' => 'perform', 'restaurants' => $restaurants]);
    }
    public function getFoods()
    {

        $foods = Menu::where('restaurant_id', request('id'))->get()->load('food');
        return response()->json(['allah' => 'perform', 'foods' => $foods]);
    }
}
