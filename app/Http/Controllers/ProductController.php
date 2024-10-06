<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function order(Request $request) {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($validated['product_id']);
        $totalPrice = $product->price * $validated['amount'];
        /*if(Auth::user() == null){
            return redirect()->back()->with('success', "Зарегистрируйтесь, прежде чем делать заказ.");
        }*/

        $order = new ProductPage();
        $order->product_id = $product->id;
        $order->user_id = Auth::user()->id;
        $order->amount = $validated['amount'];
        $order->total_price = $totalPrice;
        $order->save();

        return redirect()->back()->with('success', "Заказ успешно оформлен на сумму $totalPrice руб.");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
