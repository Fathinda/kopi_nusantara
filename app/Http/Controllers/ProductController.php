<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|file',
            'category_id' => 'required|exists:categories,id',
            // 'user_id' => 'required|exists:users,id',
            'description' => 'required|string',
        ]);

        $nama_file = null;
        if ($request->file('images')) {
            $image = $request->file('images');
            $nama_file = "product_" . time() . "." . $image->getClientOriginalExtension();
            $dir = 'uploaded/images';
            $image->move($dir, $nama_file);
        }

        Product::create([
            'name' => $request->name,
            'images' => $nama_file,
            'category_id' => $request->category_id,
            'user_id' => '1',
            'description' => $request->description,
        ]);

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
        return view('admin.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|file',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'description' => 'required|string',
        ]);

        $nama_file = $product->images;
        $dir = 'uploaded/images';
        if ($request->file('images')) {
            // Delete old image if exists
            if (File::exists($dir . '/' . $product->images)) {
                File::delete($dir . '/' . $product->images);
            }

            $image = $request->file('images');
            $nama_file = "product_" . time() . "." . $image->getClientOriginalExtension();
            $image->move($dir, $nama_file);
        }

        $product->update([
            'name' => $request->name,
            'images' => $nama_file,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        // Delete the image file if it exists
        if ($product->images) {
            $dir = 'uploaded/images';
            if (File::exists($dir . '/' . $product->images)) {
                File::delete($dir . '/' . $product->images);
            }
        }

        $product->delete();
        return redirect()->route('products.index');
    }
}
