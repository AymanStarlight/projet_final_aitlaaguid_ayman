<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show(Product $product) {
        return view('frontend.product.product', compact('product'));
    }

    public function index() {
        $products = Product::all();
        $categories = Category::all();
        return view('backend.product.product', compact('products', 'categories'));
    }

    public function store(Request $request) {
        request()->validate([
            "name" => ['required'],
            "price" => ['required'],
            "stock" => ['required'],
            "category" => ['required'],
            "description" => ['required'],
        ]);

        if($request->hasFile('img_file')) {
            request()->validate([
                "img_file" => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            ]);

            $request->file("img_file")->storePublicly('img/products/', 'public');
            $img_url = $request->file("img_file")->hashName();
        }

        $data = [
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "category_id" => $request->category,
            "user_id" => auth()->user()->id,
            "img_url" => $img_url,
            "description" => $request->description,
        ];

        Product::create($data);


        return back()->with('success', 'Product created successfuly');
    }

    public function update(Request $request, Product $product) {
        request()->validate([
            "name" => ['required'],
            "price" => ['required'],
            "stock" => ['required'],
            "category" => ['required'],
            "description" => ['required'],
        ]);

        if ($request->file('img_file') != null) {
            if(!strstr($product->img_url, 'product')) {
                Storage::disk("public")->delete('img/products/' . $product->img_url);
            }

            $request->file("img_file")->storePublicly('img/products/', 'public');
            $img_url = $request->file("img_file")->hashName();

            $data = [
                "name" => $request->name,
                "price" => $request->price,
                "stock" => $request->stock,
                "category_id" => $request->category,
                "img_url" => $img_url,
                "description" => $request->description,
            ];
            $product->update($data);
        } else {
            $data = [
                "name" => $request->name,
                "price" => $request->price,
                "stock" => $request->stock,
                "category_id" => $request->category,
                "description" => $request->description,
            ];

            $product->update($data);
        }

        return back()->with('success', 'Product Updated Successfuly');
    }

    public function destroy(Product $product) {

        if(!strstr($product->img_url, 'product')) {
            Storage::disk("public")->delete('img/products/' . $product->img_url);
        }

        $product->delete();

        return redirect()->back()->with('error', 'Product deleted successfuly');
    }
}
