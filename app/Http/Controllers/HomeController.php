<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('frontend.home.home');
    }

    public function shop() {
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.shop.shop', compact('products', 'categories'));
    }
}
