<?php
use App\Http\Controllers\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [category::class, 'index']);

Route::get('/categories/{id}', [category::class, 'show']);

Route::post('/categories/{request}', [category::class, 'create']);



