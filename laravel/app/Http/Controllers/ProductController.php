<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function list() {
        $products = \App\Models\Product::all();

        return view('products', ['products' => $products]);

        echo "<pre>";
        var_dump($products);
        die();
    }

    public function detail($id) {
        $product = \App\Models\Product::find($id);
        
        return view('detail', ['detail' => $detail]);
        dd($id);
    }
}
