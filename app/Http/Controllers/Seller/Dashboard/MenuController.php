<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\Ghaza;
use App\Models\Coupon;
use Exception;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function getRestaurants()
    {
        $restaurants = Restaurant::where('user_id', auth()->user()->id)->get();
        return response()->json(['allah' => 'perform', 'restaurants' => $restaurants]);
    }
    public function getFoods()
    {
        $foods = Menu::where('restaurant_id', request('id'))->get()->load('ghazas');
        return response()->json(['allah' => 'perform', 'foods' => $foods]);
    }
    public function getFoodsForAddTodRestaurant()
    {
        try {
            $foods = Ghaza::where('user_id', auth()->user()->id)->get();
            return response()->json(['allah' => 'perform', 'foods' => $foods]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function saveFoodsForAddTodRestaurant()
    {
        $foods = explode(',', request('foods'));
        DB::beginTransaction();
        try {
            foreach ($foods as $food) {
                // TODO اگر قبلا این غذا در این رستوران بود خطا بدهد
                // TODO اعتبار سنجی برای این فرم
                $menu = new Menu;
                $menu->restaurant_id = request('id');
                $menu->food_id = $food;
                $menu->save();
            }
            DB::commit();
            return response()->json(['allah' => 'perform']);
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
    public function getFoodsWithCoupon()
    {
        try {
            $foods = Menu::where('restaurant_id', request('id'))->get()->load('ghazas');
            $coupons = Coupon::all();
            return response()->json(['allah' => 'perform', 'foods' => $foods, 'coupons' => $coupons]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function saveCouponForFood()
    {
        $foods = explode(',', request('menus'));
        DB::beginTransaction();
        try {
            $coupon = Coupon::find(request('couponId'));
            $coupon->menus()->sync($foods);
            DB::commit();
            return response()->json(['allah' => 'perform']);
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
}
