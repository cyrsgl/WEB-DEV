<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
            return view('students.student');
    }

    public function store(Request $request){
        //dd();
        //dd("STOP");
        $firstName=$request->input('first_name');
        $lastName=$request->input('last_name'); 
        $middleName=$request->input('middle_name');
        //dd($lastName . ", " . $firstName . ", " . $middleName);
        
        return view('students.show', compact('firstName', 'lastName', 'middleName'));

    }
}
