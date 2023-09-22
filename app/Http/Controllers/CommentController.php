<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Product $product) {

        $data = [
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
            'content' => $request->content
        ];

        Comment::create($data);

        return back()->with('success', 'Comment Added Successfuly');
    }
}
