<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\CartItem;
use App\Http\Resources\Seller\Dashboard\OrderResource;
use App\Http\Resources\Seller\Dashboard\OrderDetailResource;
use App\Http\Resources\Seller\Dashboard\OrderDetailUserResource;
use Notification;
use App\Notifications\Seller\Dashboard\OrderNotification;

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
                $q->select('id', 'cart_id', 'menu_id', 'quantity', 'unit_price', 'status');
                $q->with(['menu' => function ($q) {
                    $q->where('restaurant_id', request('restaurantId'));
                    $q->select('id', 'ghaza_id');
                    $q->with(['ghaza' => function ($q) {
                        $q->select('id', 'name', 'user_id');
                    }]);
                }]);
            }
        ])->with(['user' => function ($q) {
            $q->with(['addresses' => function ($q) {
                $q->select('textAddress');
            }]);
            $q->with(['phones' => function ($q) {
                $q->select('phoneNumber');
            }]);
        }])->get(['id', 'user_id']);


        $coll = OrderDetailResource::collection($cartItem[0]->cartItems);
        $cartItemFilter = $cartItem[0]->cartItems->filter(fn ($cartItem) => $cartItem->menu !== null);
        $userInformation = OrderDetailUserResource::collection($cartItem);

        return response()->json(['allah' => 'perform', 'cartItems' => $coll, 'cartItems0' => $cartItemFilter, 'cartItems1' => $cartItem, 'userInformation' => $userInformation[0]]);
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
    public function changeStatus()
    {
        try {
            \DB::transaction(function () {
                CartItem::whereIn('id', explode(',', request('cartItemsArray')))->update(
                    ['status' => request('status')]
                );
            });
            $details = [
                'greeting' => '1',
                'body' => '1',
                'actionText' => '2',
                'actionURL' => '3',
                'thanks' => '4',
                'order_id' => '4'
            ];
            Notification::send(User::find(request('buyerId')), new OrderNotification($details));
            // $user->notify(new UserNotification(['name' => 'reza']));
            return response()->json(['allah' => 'perform']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
