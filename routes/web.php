<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

Route::get('/app', function () {
    return view('pages.dashboard');
});

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/book', [BookController::class, 'index']);
Route::get('/book/new', [BookController::class, 'show_add_form']);
Route::post('/book/new', [BookController::class, 'do_add'])->name('add-book');
