<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    function index(){
        return view('authen.index');
    }

    function loginProses(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if(!auth::attempt($req->only('email','password'))){
            return back()->with('error', 'email dan password salah');
        }
        return redirect('/dashboard');
    }
    function logout(){
        Auth::logout();
        return redirect()->route('home')->with('gagal','Login gagal');
    }
}
