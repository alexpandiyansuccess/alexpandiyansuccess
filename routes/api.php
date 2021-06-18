<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Product\ProductIndexController;
use App\Http\Controllers\Product\ProductDestroyController;

use App\Http\Controllers\Product\ProductShowyController;

use App\Http\Controllers\Product\ProductStoreController;

use App\Http\Controllers\Product\ProductUpdateController;

use Illuminate\Http\Request;
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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('news')->name('news.')->group(function() {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::post('/', [AdminController::class,'store'])->name('store');
    Route::delete('/{id}',[AdminController::class,'destroy'])->name('destroy');
    Route::get('/{id}',[AdminController::class,'show'])->name('show');
    Route::patch('/{id}',[AdminController::class,'update'])->name('update');
});

Route::get('/products', ProductIndexController::class);


// Route::get('/products', ProductIndexController::class)->name('index');

Route::post('/products',ProductStoreController::class);

Route::delete('/products/{id}',ProductDestroyController::class);

Route::patch('/products/{id}',ProductUpdateController::class);

Route::post('/products/{id}',ProductShowyController::class);



