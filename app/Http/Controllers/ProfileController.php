<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $data = "Hello world";
        
        $firstname = "Cyan";
        $lastname = "Vega";
        return view('pages.profile', compact('data','lastname','firstname'));
    }
}
