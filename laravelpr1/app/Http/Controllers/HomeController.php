<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data = ['title' => 'Home Page', 'content' => 'Lorem ipsum'];
        $data['fruits'] = ["Mango", "Orange", "Apple", "Grape"];
        return view('home', $data);
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }
}
