<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::resource('/cliente', UserController::class);

Route::resource('/produto', ProductController::class);

Route::resource('/pedidos', OrderController::class);

Route::resource('/status', StatusController::class);