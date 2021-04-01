<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function list() {
        $products = \App\Models\Product::all();

        return view('products', ['products' => $products]);
    }

    public function detail($id)
    {
        $result = \App\Models\Product::all()->where('id', $id)->first();

        return view('detail', ['detail' => $result]);
    }
}
