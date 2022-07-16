<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiUserController;
use App\Http\Controllers\Api\ApiRestaurantController;
use App\Http\Controllers\Api\Auth\ApiLoginController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Seller\Dashboard\OrderController as SellerOrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/addresses', [ApiUserController::class, 'getAddresses']);
// Route::post('/addresses', [ApiUserController::class, 'addAddress']);
// Route::get('/addresses/{address_id}', [ApiUserController::class, 'setDefaultAddress']);
// Route::get('/restaurants/{restaurant_id}', [ApiRestaurantController::class, 'getRestaurantInformation']);
// Route::get('/restaurants', [ApiRestaurantController::class, 'getRestaurantsWithFilter']);
// Route::get('/restaurants/{restaurant_id}/foods', [ApiRestaurantController::class, 'getRestaurantsWithFoods']);

Route::post('/signin', [ApiLoginController::class, 'signin']);
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/addresses', [ApiUserController::class, 'getAddresses']);
    Route::post('/addresses', [ApiUserController::class, 'addAddress']);
    Route::get('/addresses/{id}', [ApiUserController::class, 'setDefaultAddress']);
    Route::get('/restaurants/{id}', [ApiRestaurantController::class, 'getRestaurantInformation']);
    Route::get('/restaurants', [ApiRestaurantController::class, 'getRestaurantsWithFilter']);
    Route::get('/restaurants/{restaurant_id}/foods', [ApiRestaurantController::class, 'getRestaurantsWithFoods']);

    Route::post('/sign-out', [ApiLoginController::class, 'logout']);
    // Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'accounts', 'as' => 'account.'], function () {
    //     Route::apiResource('/orders', [ApiUserController::class, 'getAddresses']);
    // });
    Route::group([], function () {
        Route::apiResource('/orders', OrderController::class);
        Route::get('/orders/{cart_id}/pay', [OrderController::class, 'pay']);
    });
});
Route::prefix('seller/dashboard')->group(function () {
    Route::resource('/orders', SellerOrderController::class);
});
