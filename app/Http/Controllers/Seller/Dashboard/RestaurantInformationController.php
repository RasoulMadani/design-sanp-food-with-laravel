<?php

namespace App\Http\Controllers\Seller\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class RestaurantInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('viewAny',auth()->user());
        $restaurantInformation = Restaurant::where('id', request('id'))->with('categories', 'addresses', 'phones', 'images')->first();
        if (!Gate::allows('view', $restaurantInformation)) {
            return response()->json(['status' => 'forbidden'], 403);
        }
        $restaurantCategories = Category::where('group', 'restaurant')->get();
        return response()->json(['allah' => 'perform', 'restaurantInformation' => $restaurantInformation, 'restaurantCategories' => $restaurantCategories],200);
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
