<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aliController;

Route::get('products' ,[aliController::class,('index')]);
