<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('V1')->middleware(['auth:sanctum', 'throttle:api'])->group( function () { 

    Route::apiResources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
    ]);
});
