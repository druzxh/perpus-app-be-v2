<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Api\Test;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v2'], function () {
    Route::get('/', [HomeController::class, 'noRoute']);
    Route::get('/test', [Test::class, 'test']);
    Route::get('/error', [Test::class, 'testError']);
    Route::get('/not-found', [Test::class, 'notFound']);
});