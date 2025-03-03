<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $title = 'Daftar UMKM berdasarkan ' . $category->name;
        $h2Title = 'Daftar UMKM';
        $h2Description = 'Di bawah ini daftar UMKM berdasarkan kategori ' . $category->name;
        $products = $category->products;

        return view('product.index', compact('title', 'h2Title', 'h2Description', 'products'));
    }
}
