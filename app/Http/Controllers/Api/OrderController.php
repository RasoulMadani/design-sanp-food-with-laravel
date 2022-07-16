<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use Exception;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())
            ->get()->load('cartItems')->load('cartItems.menu.restaurant', 'cartItems.menu.restaurant.images', 'cartItems.menu.ghaza');
        $cart2 = $cart[0]->cartItems;
        $array = [];
        foreach ($cart2 as $key => $value) {
            $array[] = [
                "id" => $value->id,
                "restaurant" => [
                    "title" => $value->menu->restaurant->name,
                    "image" => $value->menu->restaurant->images[0]->url
                ],
                "foods" => [
                    [
                        "id" => $value->menu->ghaza->id,
                        "title" => $value->menu->ghaza->name,
                        "count" => $value->quantity,
                        "price" => $value->menu->ghaza->price
                    ]
                ],
                "created_at" => $value->created_at,
                "updated_at" => $value->updated_at
            ];
            // return response()->json([$value->id, $value->menu->restaurant->name, $value->menu->restaurant->images[0]->url, $cart2]);
        }
        return response()->json($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())
            ->get()->load('cartItems');
        try {
            if ($cart->isEmpty()) {
                DB::beginTransaction();
                $cartCreate = Cart::create(['user_id' => auth()->id()]);
                $cartId = $cartCreate->id;
                $cartItem = CartItem::create([
                    'cart_id' => $cartId,
                    'menu_id' => $request->menu_id,
                    'quantity' => 1,
                    'unit_price' => 1,
                ]);
                DB::commit();
                return response()->json($cartItem);
            } elseif ($cart[0]->cartItems->count() >= 1) {

                $yek = $cart[0]->cartItems->firstWhere('menu_id', $request->menu_id);
                if ($yek) {
                    // TODO ریسپانس کد
                    return response()->json('این مورد در سبد خرید موجود است
                        لطفا از دکمه افزایش برای زیاد کردن مقدار استفاده کنید
                        ');
                } else {
                    $cartItem = CartItem::create([
                        'cart_id' => $cart[0]->id,
                        'menu_id' => $request->menu_id,
                        'quantity' => 1,
                        'unit_price' => 1,
                    ]);
                    return response()->json('مورد به سبد خرید اضافه شد');
                }
            } elseif ($cart[0]->cartItems->count() == 0) {
                $cartItem = CartItem::create([
                    'cart_id' => $cart[0]->id,
                    'menu_id' => $request->menu_id,
                    'quantity' => 1,
                    'unit_price' => 1,
                ]);
                return response()->json($cartItem);
            }
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
        // $cart->update([
        //     // 'quantity' => $cart->quantity + $request->quantity,
        //     'quantity' => 1,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::where('user_id', auth()->id())
            ->get()->load('cartItems');
        return response()->json($cart);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::where('user_id', auth()->id())
            ->get()->load('cartItems');
        $yek = $cart[0]->cartItems->firstWhere('menu_id', $id);
        $cartItemId = $yek->id;
        $affectedRows = CartItem::where("id", $cartItemId)->update(["quantity" => $request->quantity]);
        return response()->json('مقدار جدید به سبد اضافه شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pay($cart_id)
    {
        return response()->json("کارت " . " $cart_id " . "پرداخت شد");
    }
}
