<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    function index(){
        $students = Student::all();
        //dd($students);
        return view('student/index', ['mystudents' => $students]);
    }


    function create(){

        return view('student/create');
    }


    function store(Request $request){
        $st = new Student();
        $st['name'] = $request->input('name');
        $st['email'] = $request->input('email');
        $st['phone'] = $request->input('phone');

        $st->save();
        
        return redirect(route('student.index'))->with('msg', 'Successfully Added');
    }

    function destroy(Request $request){
        $st = Student::find($request->id);
        
        $st->delete();
        return redirect(route('student.index'))->with('msg', 'Successfully Deleted');
    }

    function edit(Request $request){
        $st = Student::find($request->id);
        return view('student/edit', ['student' => $st]);
    }

    function update(Request $request){
        $st = Student::find($request->id);
        $st['name'] = $request->input('name');
        $st['email'] = $request->input('email');
        $st['phone'] = $request->input('phone');
        
        $st->update();
        return redirect(route('student.index'))->with('msg', 'Successfully Updated');
    }

}

