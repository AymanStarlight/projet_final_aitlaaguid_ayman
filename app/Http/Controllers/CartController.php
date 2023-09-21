<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = CartProduct::all()->where('cart_id', auth()->user()->cart->id);
        return view('frontend.cart.cart', compact('products'));
    }

    public function store(Request $request,Product $product)
    {

        if ($product->stock < 1) {
            return back()->with('error', 'Product Out of Stock');
        }


        $cart_product = CartProduct::where('cart_id', auth()->user()->cart->id)->where('product_id', $product->id)->get()->first();

        if ($cart_product) {
            $cart_product->stock += $request->stock ? $request->stock : 1;
            $product->stock -= $request->stock ? $request->stock : 1;
            $product->save();
            $cart_product->save();

            return back()->with('success', 'Product Added To Cart');
        }

        $data = [
            'cart_id' => auth()->user()->cart->id,
            'product_id' => $product->id,
            'stock' => $request->stock ? $request->stock : 1
        ];

        $product->stock -= $request->stock ? $request->stock : 1;
        $product->save();

        CartProduct::create($data);

        return back()->with('success', 'Product Added To Cart');
    }

    public function increment(Product $product)
    {

        if ($product->stock < 1) {
            return back()->with('error', 'Product Out of Stock');
        }

        $cart_product = CartProduct::where('cart_id', auth()->user()->cart->id)->where('product_id', $product->id)->get()->first();

        $cart_product->stock += 1;
        $product->stock -= 1;
        $product->save();
        $cart_product->save();

        return back();

    }
    public function decrement(Product $product)
    {

        $cart_product = CartProduct::where('cart_id', auth()->user()->cart->id)->where('product_id', $product->id)->get()->first();


        $cart_product->stock -= 1;
        $product->stock += 1;
        $product->save();
        $cart_product->save();

        if ($cart_product->stock < 1) {
            $cart_product->delete();
            return back()->with('warning', 'Product Removed from Cart');
        }
        return back();

    }

    public function destroy(Product $product)
    {
        $cart_product = CartProduct::where('cart_id', auth()->user()->cart->id)->where('product_id', $product->id)->get()->first();

        $product->stock += $cart_product->stock;
        $product->save();

        $cart_product->delete();
        return back()->with('warning', 'Product Removed from Cart');
    }
}