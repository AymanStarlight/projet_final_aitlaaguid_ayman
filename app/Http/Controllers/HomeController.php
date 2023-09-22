<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactInfo;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $products = Product::all();
        return view('frontend.home.home', compact('products'));
    }

    public function shop($sort = null, Category $category = null) {
        $pds = $category ? Product::all()->where('category_id', $category->id) : Product::all()->shuffle();
        $products = $sort ? $pds->sortBy("$sort") : $pds;
        $categories = Category::all();
        return view('frontend.shop.shop', compact('products', 'categories'));
    }

    public function contact() {
        $contact = ContactInfo::all()->first();
        return view('frontend.contact.contact', compact('contact'));
    }
}
