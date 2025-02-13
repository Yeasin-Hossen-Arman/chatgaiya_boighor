<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function service(){
        return view('service');
    }
    public function product(){
        return view('product');
    }
    public function pricing(){
        return view('pricing');
    }
    public function signin(){
        return view('signin');
    }
}
