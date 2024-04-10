<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/kei', function () {
//     return 'I am Kei soaper cute';
// });

Route::get('/user', function (Request $request) {
    return $request->name . ' - ' . $request->email;
});

Route::post('/kayla', function (){
    return 'this is a post method';
});

Route::put('/put/{id}', function (){
    return 'this is a put method';
});

Route::patch('/patch/{id}', function (){
    return 'this is a patch method';
});

Route::delete('/delete/{id}', function (){
    return 'this is a delete method';
});

Route::middleware('method')->group(function(){
    Route::get('/kei',[UserController::class, 'index']);
    Route::patch('/kei/{id}',[UserController::class, 'update']);
    Route::post('/kei',[UserController::class, 'store']);
    Route::put('/kei/{id}',[UserController::class, 'update']);
    Route::delete('/kei/{id}',[UserController::class, 'destroy']);
});


// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{product}', [ProductController::class, 'show']);
// Route::put('/products/{product}', [ProductController::class, 'update']);
// Route::delete('/products/{product}', [ProductController::class, 'destroy']);

Route::get('/products', [ProductController::class, 'index']);