<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cors']], function() {
    Route::apiResource('/categories', CategoryController::class);
});
