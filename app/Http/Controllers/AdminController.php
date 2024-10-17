<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        $orders = ProductPage::all();
        return view('adminPage', ['orders' => $orders]);
    }

    public function approved(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required',
        ]);
        $order = ProductPage::findOrFail($validated['order_id']);
        $product = Product::findOrFail($order['product_id']);
        $product['amount'] = $product['amount'] - $order['amount'];
        if ($product['amount'] < 0) {
            session()->put("error_{$validated['order_id']}", "Недостаточно продукта.");
        } else if ($product['amount'] >= 0) {
            $order->status = 'одобрен';
            $product->save();
            session()->forget("error_{$validated['order_id']}");
        }

        $order->save();
        return redirect('/admin_profile');
    }

    public function delivered(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required',
        ]);
        $order = ProductPage::findOrFail($validated['order_id']);
        $order->status = 'доставлен';
        $order->save();
        return redirect('/admin_profile');
    }
}


