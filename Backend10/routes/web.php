<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;

Route::delete('/categories/{id}', function ($id) {
    $category = Category::find($id);
    if ($category) {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully'], 200);
    } else {
        return response()->json(['message' => 'Category not found'], 404);
    }
});


Route::get('/', function () {
    return view('welcome');
});
