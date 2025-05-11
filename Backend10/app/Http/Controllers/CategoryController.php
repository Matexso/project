<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        dd('ttt');
        return Category::all();
    }

    public function store(Request $request)
    {
        Category::create($request->all());
         return response()->json([
             'messages' => 'با موفقیت ذخیره شد'
         ]);
    }

    public function show($id)
    {
        $category =  Category::findOrFail($id);
//
//        return response()->json([
//            'messages' => 'با موفقیت دریافت شد',
//            'data' =>
//        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->only('name'));
        return $category;
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
