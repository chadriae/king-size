<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairerController;
use App\Http\Controllers\SpecialtieController;

// https://laravel-news.com/building-vue-spa-laravel-part-2/


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/repairers', [RepairerController::class, 'get']);

Route::get('/categories', [RepairerController::class, 'get']);
