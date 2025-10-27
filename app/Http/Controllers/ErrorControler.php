<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorControler extends Controller
{
    public function notFound() {
        return view('error.404');
        
    }
}
