<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware'=>'auth',
    'prefix'=>'auth'
],function(){
    Route::post('register',[AuthController::class,'register'])->withoutMiddleware('auth');
    Route::post('login',[AuthController::class,'login'])->withoutMiddleware('auth');
    Route::post('me',[AuthController::class,'me']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('refresh',[AuthController::class,'refresh']);
});
