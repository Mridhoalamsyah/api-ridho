<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\aktorController;
use App\Http\Controllers\Api\genreController;
use App\Http\Controllers\Api\LoginController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

})->middleware('auth:sanctum');

//Route Kategori
Route::get('kategori', [KategoriController::class, 'index']);
Route::post('kategori', [KategoriController::class, 'store']);
Route::get('kategori/{id}', [KategoriController::class, 'show']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

//route aktor
Route::resource('aktor', aktorController::class);
//route genre
Route::resource('genre', genreController::class);

//route user
Route::post('login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class, 'logout'])
->middleware('auth:sanctum');
