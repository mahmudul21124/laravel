<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('backend.student.dashboard2');
    }
}
