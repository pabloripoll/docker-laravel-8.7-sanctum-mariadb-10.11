<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CategoryController;
//use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes http://apistorelamp74laravel8sanctum.localhost/api/v1/
|--------------------------------------------------------------------------
*/

// User
Route::post('/v1/sign-up', [UserController::class, 'register']);
Route::post('/v1/login', [UserController::class, 'authenticate']);

// Products
Route::get('/v1/brands', [BrandController::class, 'index']);

Route::get('/v1/categories', [CategoryController::class, 'index']);
Route::get('/v1/categories-tree', [CategoryController::class, 'indextree']);

Route::get('/v1/products', [ProductController::class, 'index']);
Route::get('/v1/products/{id}', [ProductController::class, 'index']);

// logged user access
Route::group(['middleware' => ["auth:sanctum"]], function(){
    // User
    Route::get('/v1/user', [UserController::class, 'getAuthenticatedUser']);
    Route::get('/v1/logout', [UserController::class, 'logout']);

    // Products
    Route::post('/v1/brands', [BrandController::class, 'create']);
    Route::get('/v1/brands/{id}', [BrandController::class, 'read']);
    Route::put('/v1/brands/{id}', [BrandController::class, 'update']);
    Route::delete('/v1/brands/{id}', [BrandController::class, 'delete']);

    Route::post('/v1/categories', [CategoryController::class, 'create']);
    Route::get('/v1/categories/{id}', [CategoryController::class, 'read']);
    Route::put('/v1/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/v1/categories/{id}', [CategoryController::class, 'delete']);

    Route::post('/v1/products', [ProductController::class, 'create']);
    Route::put('/v1/products/{id}', [ProductController::class, 'update']);
    Route::delete('/v1/products/{id}', [ProductController::class, 'delete']);
});
