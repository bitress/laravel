<?php

use App\Http\Controllers\EducationalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/profile', [ProfileController::class, 'index'] );




Route::get('/educational-background', [EducationalController::class, 'index']);
