<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class MainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function cproduct($slug){
      $cat = Category::where('name',$slug)->first();
    //   dd($cat->id);
            $product = Product::where('category_id',$cat->id)->get();
         $category = Category::all();
        return view('main.cproduct',compact('product','category'));

    }
    public function product(){
       
            
          

       
          $product = Product::all();
         $category = Category::all();
        
      
        return view('main.product',compact('product','category'));
    }

    public function news(){
        $news = News::with(['category', 'user'])->get();
        
        return view('main.news', compact('news'));
    }
}
