<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        /**
     * Menampilkan daftar produk.
     *
     * @return \Illuminate\View\View
     */
    //
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }
}
