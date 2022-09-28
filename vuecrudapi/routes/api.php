<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThanaController;
use App\Http\Controllers\DistictController;
use App\Http\Controllers\DivisionController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// division
Route::get('division',[DivisionController::class,'index']);
Route::post('division',[DivisionController::class,'store']);
Route::get('division/{id}',[DivisionController::class,'show']);
Route::put('division/{id}',[DivisionController::class,'update']);
Route::delete('division/{id}',[DivisionController::class,'destroy']);


//district
Route::get('distict',[DistictController::class,'index']);
Route::post('distict',[DistictController::class,'store']);
Route::get('distict/{id}',[DistictController::class,'show']);
Route::put('distict/{id}',[DistictController::class,'update']);
Route::delete('distict/{id}',[DistictController::class,'destroy']);


// Route::resource('/thana',ThanaController::class)->except(['show','create','edit']);

Route::get('thana',[ThanaController::class,'index']);
Route::post('thana',[ThanaController::class,'store']);
Route::get('thana/{id}',[ThanaController::class,'edit']);
Route::put('thana/{id}',[ThanaController::class,'update']);
Route::delete('thana/{id}',[ThanaController::class,'destroy']);
