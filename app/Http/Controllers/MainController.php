<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function product(){
        return view('main.product');
    }

}
