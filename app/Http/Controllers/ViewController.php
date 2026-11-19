<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function profile(){
         return view('profile');
    }

    public function explore(){
        return view('explore', [
            'categories' => Category::where('is_active', true)->orderBy('name')->get(),
        ]);
    }

    public function publication(){
         return view('publication', [
             'categories' => Category::where('is_active', true)->orderBy('name')->get(),
         ]);
    }

    public function publish(){
         return view('publication', [
             'categories' => Category::where('is_active', true)->orderBy('name')->get(),
         ]);
    }
}
