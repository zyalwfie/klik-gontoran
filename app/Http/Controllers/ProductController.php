<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Daftar UMKM';
        $h2Title = 'Daftar UMKM';
        $h2Description = 'Di bawah adalah daftar UMKM yang tersedia di Desa Gontoran.';
        $products = Product::all();

        return view('product.index', compact('title', 'h2Title', 'h2Description', 'products'));
    }

    public function show(Product $product)
    {
        $product = $product;

        return view('product.show', compact('product'));
    }
}
