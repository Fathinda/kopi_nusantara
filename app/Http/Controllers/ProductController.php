<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();

        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    $validate = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'description' => 'required|string',
        ]);
        try { 
    $path = $request->file('images')->store('public/images');
        }
  
        Product::create($validate);

        // dd($validate);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $category = Category::all();
        return view('admin.product.edit', compact('product', 'category' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('images')) {
           
            if ($product->images) {
                Storage::delete('public/images/' . $product->images);
            }
            $imagePath = $request->file('images')->store('public/images');
            $validate['images'] = basename($imagePath);
        }

        

        $product->update($validate);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index');
    }
}
