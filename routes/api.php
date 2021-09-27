<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('products', ProductController::class);

Route::prefix('products')->group(function () {
    Route::apiResource('/{product}/reviews', ReviewController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
