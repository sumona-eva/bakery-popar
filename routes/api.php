<?php

use App\Http\Controllers\Api\V1\BranchController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\OrderAreaController;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('V1')->middleware(['auth:sanctum', 'throttle:api'])->group( function () {

    Route::apiResources([
        'product' => ProductController::class,
        'category' => CategoryController::class,
        'branch' => BranchController::class,
        'order' => OrderController::class,
        'order-area' => OrderAreaController::class,
        'customer' => CustomerController::class,
        'setting' => SettingController::class,
    ]);
});
