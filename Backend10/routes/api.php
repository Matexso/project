<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\CategoryController;
//
//Route::get('categories', [CategoryController::class, 'index']);
//Route::post('categories', [CategoryController::class, 'store']);
//Route::get('categories/{id}', [CategoryController::class, 'show']);
//Route::put('categories/{id}', [CategoryController::class, 'update']);
//Route::delete('categories/{id}', [CategoryController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('categories' , [ \App\Http\Controllers\CategoryController::class , 'index']);
Route::post('categories',[ \App\Http\Controllers\CategoryController::class , 'store']);
Route::get('categories/{id}' , [ \App\Http\Controllers\CategoryController::class , 'show']);
Route::put('categories/{id}' , [ \App\Http\Controllers\CategoryController::class , 'update']);
Route::delete('categories/{id}' , [ \App\Http\Controllers\CategoryController::class , 'destroy']);
