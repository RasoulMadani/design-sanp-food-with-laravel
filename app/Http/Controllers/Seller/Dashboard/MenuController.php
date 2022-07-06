<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\Food;
use Exception;

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
    public function getFoodsForAddTodRestaurant()
    {
        try {
            $foods = Food::where('user_id', auth()->user()->id)->get();
            return response()->json(['allah' => 'perform', 'foods' => $foods]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function saveFoodsForAddTodRestaurant()
    {
        $foods = explode(',', request('foods'));
        try {
            foreach ($foods as $food) {
                // TODO اگر قبلا این غذا در این رستوران بود خطا بدهد
                // TODO اعتبار سنجی برای این فرم
                $menu = new Menu;
                $menu->restaurant_id = request('id');
                $menu->food_id = $food;
                $menu->save();
            }
            return response()->json(['allah' => 'perform']);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
