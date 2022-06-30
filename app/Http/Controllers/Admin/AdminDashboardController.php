<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function showDashboardPage()
    {
        return view('admin.dashboard');
    }
    public function saveCategory(Request $request)
    {
        try {
            $credentials = $request->validate([
                'name' => 'required|unique:categories',
                'group' => [
                    'required',
                    Rule::in(['food', 'restaurant'])
                ],
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        try {
            $registerCategory = new Category;
            $registerCategory->name = request('name');
            $registerCategory->group = request('group');
            $registerCategory->save();
            return response()->json('allah1');
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json('allah');
    }
    public function showCategoryList()
    {
        $categories = Category::all();
        return view('admin.showCategoryList', compact('categories'));
    }
    public function editCategoryList(Request $request)
    {
        try {
            $credentials = $request->validate([
                'id' => 'required|integer'
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            return $th->validator->errors();
        }
        try {
            $categories = Category::find(request('id'));
            $categories->name = request('newCategoryName');
            $categories->save();
            return response()->json(['allah'=>'ok']);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
        return response()->json(['allah'=> 'false']);
    }
}
