<?php

use App\Http\Controllers\Categories\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
