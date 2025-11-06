<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index(){
            return view('students.student');
    }
      

    public function store(Request $request){
        //dd();
        //dd("STOP");
        Log::info('============================>>>>> ENTER STUDENT INFO <<<<<===========================');
        $firstName=$request->input('first_name');
        $lastName=$request->input('last_name'); 
        $middleName=$request->input('middle_name');
        $birthday=$request->input('birthday');
        //dd($lastName . ", " . $firstName . ", " . $middleName);
        $age = $this->calculateAge($request->input('birthday'));

        //dd('STOP');
        Log::debug(message: 'aw aw');
        Log::notice(message: 'gusto ko na magmahal');
        Log::warning(message: 'This is a warning message in Student Controller');
        Log::info(message: 'First Name: ' . $firstName. ', Last Name: ' . $lastName);
    

        Log::info('============================>>>>> END STUDENT CONTROLLER <<<<<===========================');
        return view('students.show', compact('firstName', 'lastName', 'middleName', 'birthday', 'age'));

    }

    private function calculateAge($dateofBirth) {
        $birthday = Carbon::parse($dateofBirth);
        $today = Carbon::now(); 

        $age = $birthday->diff($today);

        return $age->y;
    
    }
}
