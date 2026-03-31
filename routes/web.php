<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
Route::get('/', function () {
    return view('home');
});

Route::get('/mm', function () {
    return "Hello from laravel";
});

Route::get('/about', function() {
    return "This is about page";
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/', [AboutController::class, 'index']);