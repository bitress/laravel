<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', [ProfileController::class, 'index'] );

Route::get('/home', function () {
    return view('home');
});



Route::get('/educational-background', function(){
    return view('pages.educational');
});
