<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', [ProductController::class, 'index'])->name('homepage');
Route::get('productDetail/{ProductId?}', [ProductController::class, 'getProductDetail'])->name('productdetail');
// Route::get('index', [ProductController::class, 'index']);
// Route::get('productdetail/{ProductId}', ['as' => 'proddetail', 'uses' => 'ProductController@getProductDetail']);
Route::get('addproduct', [ProductController::class, 'addProd'])->name('add');
Route::post('', [ProductController::class, 'insertProduct'])->name('insert');
Route::get('productlist', [ProductController::class, 'listProduct'])->name('productlist');
Route::get('productlist/{ProductId}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');