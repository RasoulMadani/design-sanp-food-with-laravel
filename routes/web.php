<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\RegisterController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Stores\StoresController;
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

Route::get('/seller/dashboard', [SellerDashboardController::class, 'showDashboardPage'])->name('seller.dashboard');
Route::get('/seller/dashboard/show-create-food-list', [SellerDashboardController::class, 'showCreateFoodList'])->name('seller.dashboard.showCreateFoodList');
Route::post('/seller/dashboard/save-create-food', [SellerDashboardController::class, 'saveCreateFood']);

Route::post('/stores/get-stores', [StoresController::class, 'getStores']);
