<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home(){
        return Inertia::render('Home');
    }

    public function about(){
        return Inertia::render('About');
    }

    public function instructor(){
        return Inertia::render('Instructor');
    }

    public function contact(){ 
        return Inertia::render('Contact');
    }

    public function blog(){ 
        return Inertia::render('Blog');
    }
}
