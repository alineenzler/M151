<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders($id) {
        $order = Order::find($id);
        dd($order->user);
    }
}
