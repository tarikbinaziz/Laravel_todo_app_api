<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
     $products = Product::all();

    $products->transform(function ($product) {
        $product->image = url('storage/' . $product->image);
        return $product;
    });

    return response()->json($products);

    }



    public function store(Request $request)
{
    $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'nullable|string',
        'price'       => 'nullable|numeric',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
    }

    $product = Product::create([
        'title'       => $request->title,
        'description' => $request->description,
        'price'       => $request->price,
        'image'       => $imagePath,
    ]);

    return response()->json($product, 201);
}

}
