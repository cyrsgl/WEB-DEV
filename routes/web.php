<?php

use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'user'],function(){
    Route::get('/', function(){
        return view("Users.user");
    });

    Route::get('/{id}', function($id){
    //return "Your ID is: ". $id;
    return "<a href = '".route('editUser', $id)."' >Edit</a>";
    });

    Route::get('//{id}/{name}', function($id, $name){
    return "Your ID is: ". $id. " ". $name;
    });

});

Route::get('/edit/{id}', function($id){
    //return "Edit your ID is: ". $id;
    return "<a href = '".route('homePage', $id)."' >Home</a>";
})->name("editUser");

Route::get('/home/{id}', function($id){
    return "Welcome ". $id;
})->name("homePage");

Route::get('/employee', function(){
    return "<h1>Employee Page</h1>";
});

Route::fallback(function(){
    return "Route Not Exist";
    //return redirect()->route("user");
});

Route::get('/dashboard', function (){
 return view('dashboard');
});


Route::get('/responsive',function(){
    return view('sample.responsive');
});

Route::fallback(function() {
    return redirect() ->route("User.Error");
});

Route::get('/error', function () {
    return view('Error.404');
})->name('User.Error');

Route::get('/student', function () {
    return view('students.student');
});

Route::get('/pricing', function () {
    return view('pricings.pricing');
});
