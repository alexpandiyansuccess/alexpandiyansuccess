<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Product\ProductIndexController;
use App\Http\Controllers\Product\ProductDestroyController;

use App\Http\Controllers\Product\ProductShowyController;

use App\Http\Controllers\Product\ProductStoreController;

use App\Http\Controllers\Product\ProductUpdateController;



use App\Http\Controllers\Brand\BrandStoreController;
use App\Http\Controllers\Brand\BrandDestroyController;
use App\Http\Controllers\Brand\BrandIndexController;
use App\Http\Controllers\Brand\BrandShowController;
use App\Http\Controllers\Brand\BrandUpdateController;


use App\Http\Controllers\Brandmodel\BrandModelDestroyController;
use App\Http\Controllers\Brandmodel\BrandModelIndexController;
use App\Http\Controllers\Brandmodel\BrandModelShowController;
use App\Http\Controllers\Brandmodel\BrandModelStoreController;
use App\Http\Controllers\Brandmodel\BrandModelUpdateController;








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


// Brands
// Route::post('/addbrand',BrandStoreController::class);
// Route::get('/',BrandIndexController::class);
// Route::delete('/brands/{id}',BrandDestroyController::class);
// Route::post('/brands/{id}',BrandShowController::class);
// Route::patch('/brands/{id}',BrandUpdateController::class);


Route::prefix('brand')->name('brand.')->group(function() {
    Route::get('/',BrandIndexController::class)->name('index');
    Route::post('/', BrandStoreController::class)->name('store');
    Route::delete('/{id}',BrandDestroyController::class)->name('destroy');
    Route::post('/{id}',BrandShowController::class)->name('show');
    Route::patch('/{id}',BrandUpdateController::class)->name('update');
});

// BrandModels
Route::post('/addbrandmodels',BrandModelStoreController::class);
Route::get('/viewbrandmodels',BrandModelIndexController::class);
Route::delete('/brandsmodels/{id}',BrandModelDestroyController::class);
Route::post('/brandsmodels/{id}',BrandModelShowController::class);
Route::patch('/brandsmodels/{id}',BrandModelUpdateController::class);








