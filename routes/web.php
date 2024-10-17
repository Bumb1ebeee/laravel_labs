<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use App\Models\User;
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

Route::post('/order', [ProductController::class, 'order'])->middleware('auth');

Route::get('/profile', function () {
    return view('profile');})->middleware('auth');

Route::get('/login', function () {
    return view('authPage');
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', function () {
    return view('registerPage');
});
Route::post('/register', [RegisterController::class, 'index']);

Route::get('/profile', [AuthController::class, 'show'])->middleware('auth');

Route::get('/admin_profile', [AdminController::class, 'show'])->middleware('auth')->middleware('admin')->name('admin_profile');

Route::post('/approved', [AdminController::class, 'approved'])->middleware('auth')->middleware('admin')->name('approved');
Route::post('/delivered', [AdminController::class, 'delivered'])->middleware('auth')->middleware('admin')->name('delivered');
