<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Http\Resources\Seller\Dashboard\OrderResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItem = CartItem::with(['menu' => function ($q) {
            $q->where('restaurant_id', request('id')); // query posts table
        }, 'cart', 'cart.user', 'cart.user.addresses'])->get();

        // $cartItem = Cart::with('cartItems')->with(['cartItems.menu' => function ($q) {
        //     $q->where('restaurant_id', request('id')); // query posts table
        // },'cart','cart.user','cart.user.addresses'])->get();
        $coll = OrderResource::collection($cartItem);
        $coll = $coll->sortBy('idUser')->toArray();
        // $array = [];
        // foreach ($coll as $key => $oneCall) {
        //     $array[] = $oneCall;
        //     return response()->json(['allah' => $oneCall->idUser]);
        //     if (isset($coll[$key + 1]) && $oneCall->idUser != $coll[$key + 1]->idUser) {
        //         $array[] = $oneCall;
        //     }
        // }
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
        //
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
