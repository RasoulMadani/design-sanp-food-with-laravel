<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\RegisterController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Dashboard\Coupon\CouponController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Stores\StoresController;
use App\Http\Controllers\Seller\Dashboard\MenuController;
use App\Http\Controllers\Config\ConfigController;
use App\Http\Controllers\Seller\Dashboard\RestaurantInformationController;
use App\Http\Controllers\Seller\Dashboard\OrderController as SellerOrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/1', [ConfigController::class, 'clearRoute']);
Route::get('/public/register-seller', [RegisterController::class, 'showPageRegister']);
Route::post('/public/register-seller/get-personal-information', [RegisterController::class, 'getPersonalInformation']);
Route::post('/public/register-seller/get-restaurant-information', [RegisterController::class, 'getRastaurantInformation']);
Route::get('/public/login-form', [LoginController::class, 'showLoignPage']);
Route::post('/public/login-form', [LoginController::class, 'loginToAccount']);

// admin url
Route::get('/admin/dashboard', [AdminDashboardController::class, 'showDashboardPage'])->name('admin.dashboard');
Route::get('/admin/dashboard/show-category-list', [AdminDashboardController::class, 'showCategoryList'])->name('admin.dashboard.showCategoryList');
Route::post('/admin/dashboard/edit-category-list', [AdminDashboardController::class, 'editCategoryList']);
Route::post('/admin/dashboard/save-category', [AdminDashboardController::class, 'saveCategory']);
Route::post('/admin/dashboard/save-coupon', [CouponController::class, 'saveCoupon']);

Route::get('/seller/dashboard', [SellerDashboardController::class, 'showDashboardPage'])->name('seller.dashboard');
Route::get('/seller/dashboard/show-create-food-list', [SellerDashboardController::class, 'showCreateFoodList'])->name('seller.dashboard.showCreateFoodList');
Route::post('/seller/dashboard/save-create-food', [SellerDashboardController::class, 'saveCreateFood']);
Route::post('/seller/dashboard/get-restaurants', [MenuController::class, 'getRestaurants']);
Route::post('/seller/dashboard/get-foods', [MenuController::class, 'getFoods']);

Route::post('/seller/dashboard/add-coupon/get-foods-whit-coupon', [MenuController::class, 'getFoodsWithCoupon']);
Route::post('/seller/dashboard/add-coupon/save-coupon-for-add-to-menu', [MenuController::class, 'saveCouponForFood']);


Route::post('/seller/dashboard/create-menu/get-food-for-add', [MenuController::class, 'getFoodsForAddTodRestaurant']);
Route::post('/seller/dashboard/create-menu/save-food-for-add-restaurant', [MenuController::class, 'saveFoodsForAddTodRestaurant']);
Route::get('/seller/dashboard/edit-restaurant-information/get-restaurant-informations', [RestaurantInformationController::class, 'getRestaurantInformations']);
Route::post('/seller/dashboard/edit-restaurant-information/save-restaurant-informations', [RestaurantInformationController::class, 'saveRestaurantInformations']);

Route::post('/stores/get-stores', [StoresController::class, 'getStores']);

Route::prefix('seller/dashboard')->group(function () {
    Route::resource('/orders', SellerOrderController::class);
    Route::resource('/edit-restaurant-information', RestaurantInformationController::class);
    Route::post('/orders/status', [SellerOrderController::class,'changeStatus']);
    Route::post('/orders/status', [SellerOrderController::class,'changeStatus']);
});

