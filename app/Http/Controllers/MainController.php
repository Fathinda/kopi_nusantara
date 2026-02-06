<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function product(){
        return view('main.product');
    }

    public function news(){
        $news = News::with(['category', 'user'])->get();
        
        return view('main.news', compact('news'));
    }
}
