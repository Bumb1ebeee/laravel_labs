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

        if ($order->status == 'новый') {
            if ($order->product->amount < $order->amount) {
                session()->put("error_{$validated['order_id']}", "Недостаточно продукта.");
                return redirect('/admin_profile')->withInput();
            }

            $order->status = 'одобрен';
            $order->save();

            $order->product->amount -= $order->amount;
            $order->product->save();

            session()->forget("error_{$validated['order_id']}");
        }

        return redirect('/admin_profile');
    }

    public function delivered(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required',
        ]);
        $order = ProductPage::findOrFail($validated['order_id']);
        if ($order->status == 'одобрен') {
            $order->status = 'доставлен';
            $order->save();
        }
        return redirect('/admin_profile');
    }
}
