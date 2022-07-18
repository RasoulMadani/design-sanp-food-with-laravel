<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Http\Resources\Seller\Dashboard\OrderResource;
use App\Http\Resources\Seller\Dashboard\OrderDetailResource;
use App\Http\Resources\Seller\Dashboard\OrderDetailUserResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItem = CartItem::with(['cart', 'cart.user', 'cart.user.addresses', 'menu'])
            ->whereHas('menu', fn ($menu) => $menu->where('restaurant_id', request('id')))
            ->get();

        $coll = OrderResource::collection($cartItem);
        // $coll = $coll->filter()->all();
        return response()->json(['allah' => 'perform', 'carts' => $coll]);
        // return response()->json(['allah' => ]);
        // return response()->json($cartItem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cartItem = Cart::where('user_id', $id)->with('cartItems.menu.ghaza')->get();
        $cartItem = Cart::where('user_id', $id)->with([
            'cartItems' => function ($q) {
                $q->select('id', 'cart_id', 'menu_id', 'quantity', 'unit_price');
                $q->with(['menu' => function ($q) {
                    $q->where('restaurant_id', request('restaurantId'));
                    $q->select('id', 'ghaza_id');
                    $q->with(['ghaza' => function ($q) {
                        $q->select('id', 'name', 'user_id');
                        $q->with(['user' => function ($q) {
                            $q->with(['addresses' => function($q){
                                $q->select('textAddress');
                            }]);
                            $q->with(['phones' => function($q){
                                $q->select('phoneNumber');
                            }]);
                        }]);
                    }]);
                }]);
            }
        ])->get(['id', 'user_id']);
        $coll = OrderDetailResource::collection($cartItem[0]->cartItems);
        $userIformation = OrderDetailUserResource::collection($cartItem[0]->cartItems)[0];
        // $coll = $coll->filter()->all();

        return response()->json(['allah' => 'perform', 'cartItems' => $coll, 'cartItems1' => $cartItem, 'userIformation' => $userIformation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
