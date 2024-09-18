<?php

use App\Http\Controllers\productController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::get('products/{id}',function($id){
    return view('productPages',['product'=>Product::find($id)]);
});

Route::post('/order', [ProductController::class, 'store']);
