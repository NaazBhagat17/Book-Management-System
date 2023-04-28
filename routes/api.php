<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('stores',[App\Http\Controllers\Api\StoreController::class,'store']);
Route::get('stores',[App\Http\Controllers\Api\StoreController::class,'index']);
Route::post('authors',[App\Http\Controllers\Api\AuthorController::class,'store']);
Route::get('authors',[App\Http\Controllers\Api\AuthorController::class,'index']);
Route::post('books',[App\Http\Controllers\Api\BookController::class,'store']);
Route::get('books',[App\Http\Controllers\Api\BookController::class,'index']);
Route::post('upload',[App\Http\Controllers\Api\BookController::class,'upload']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    
    
});
