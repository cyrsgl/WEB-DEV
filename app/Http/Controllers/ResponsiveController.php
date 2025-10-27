<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsiveController extends Controller
{
    public function show(){
        return view('sample.responsive');
    }
}
