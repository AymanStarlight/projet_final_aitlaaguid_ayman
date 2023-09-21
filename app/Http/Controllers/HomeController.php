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

    public function shop($sort = null, Category $category = null) {

        $pds = $category ? Product::all()->where('category_id', $category->id) : Product::all()->shuffle();
        $products = $sort ? $pds->sortBy("$sort") : $pds;
        $categories = Category::all();
        return view('frontend.shop.shop', compact('products', 'categories'));
    }
}
