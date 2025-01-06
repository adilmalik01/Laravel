<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// HTTP GET REQUEST 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [ProductController::class,"about"]);
Route::get('/login', [AccountController::class,"Login"]);
Route::get('/registar', [AccountController::class,"Registar"]);
Route::get('/products',[ProductController::class,"AllProducts"]);

Route::get('/service', function () {
    return view('service');
});

Route::get('/contact', function () {
    return view('contact');
});


// HTTP POST REQUEST 
Route::post('/login-form',[AccountController::class,"LoginForm"]);
Route::post('/submit-form', [AccountController::class,"AddUser"]);




