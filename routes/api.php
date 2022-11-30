<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;





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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/user',[UserController::class, 'store']);
Route::get('/user/{user}',[ClientController::class, 'show']);

Route::post('/invoice', [InvoiceController::class, 'store'] );
Route::get('/invoice/{invoice}', [InvoiceController::class, 'show'] );
Route::get('/invoice', [InvoiceController::class, 'index'] );
Route::put('/invoice/{invoice}', [InvoiceController::class, 'update'] );


// Route::post('/invoice', 'App\Http\Controllers\InvoiceController@store');