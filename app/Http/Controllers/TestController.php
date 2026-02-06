<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\test;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = News::with(['category', 'user'])->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::all();
        $categories = Category::all();
        return view('admin.news.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
        $users = User::all();
        $categories = Category::all(); 
        return view('admin.news.edit', compact('news', 'users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $news->update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        $news->delete();
        return redirect()->route('news.index');
    }
}
