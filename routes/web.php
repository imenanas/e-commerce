<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;


Route::get('/', function (){ return view('welcome');})->name ('acceuil');
Route::get('/contact', function () {return view('contact');})->name('contact');



Auth::routes();


Route::middleware(['auth'])->group(function(){
 Route::get('/home', [HomeController::class, 'index'])->name('home');

});
 Route::resource('products', ProductsController::class);
