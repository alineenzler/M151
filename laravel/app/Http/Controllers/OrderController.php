<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders($id) {
        $order = Order::find($id);
        dd($order->user);
    }

    public function add($productId)
    {
        if (!is_array(session()->get('basket'))) {
            $basket = array();
        } else {
            $basket = session()->get('basket');
        }
        $product = \App\Models\Product::all()->where('id', $productId)->first();
        array_push($basket, $product);
        session()->put('basket', $basket);
        return redirect('/basket');
    }

    public function basket()
    {
        return view('basket', ['products' => session()->get('basket')]);
    }

    public function order()
    {
        return view('order', ['products' => session()->get('order')]);
    }

    public function success()
    {
        return view('success', ['products' => session()->get('success')]);
    }
}
