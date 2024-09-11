<?php

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

Route::get('/products', function () {
    return view('products', ['products' => $products = [
        ["name" => "Orange", "cost" => 50000000, "amount" => 27],
        ["name" => "Banana", "cost" => 120000000, "amount" => 17],
        ["name" => "Bread", "cost" => 70000000, "amount" => 0],
    ]]);
});
