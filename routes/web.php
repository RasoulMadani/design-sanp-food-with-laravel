<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\RegisterController;
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

Route::get('/public/register-seller',[RegisterController::class,'showPageRegister']);
Route::post('/public/register-seller/get-personal-information',[RegisterController::class,'getPersonalInformation']);
