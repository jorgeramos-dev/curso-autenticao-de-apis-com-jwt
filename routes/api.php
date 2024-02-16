<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controlers\AuthController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\ProductController;

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

$this->group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function (){
    $this->post('auth', AuthController::class);
    $this->post('auth-refresh', AuthController::refreshToken);
    $this->get('me', AuthController::getAuthenticatedUser);

    $this->apiResource('categories', CategoryController::class);
    $this->apiResource('products', ProductController::class);
});