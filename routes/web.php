<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorControler;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ResponsiveController;
use App\Http\Controllers\SingleactionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'welcome'])->name('home.');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard.show');

Route::get('/responsive', [ResponsiveController::class, 'show'])->name('responsive.show');


Route::get ('/student', [StudentController::class, 'index'])->name('student.index');
Route::post('/student', [StudentController::class, 'store'])->name('student.submit');

Route::get('/pricing', [PricingController::class, 'show'])->name('pricing.show');

Route::fallback([ErrorControler::class, 'notFound']);

Route::resource('/resources',BlogController::class);

Route::get('singleAction', SingleactionController::class);  

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/blog/category/{category}', [BlogController::class, 'filterByCategory'])->name('blog.category');

Route::get('/about', [BlogController::class, 'about'])->name('about');
