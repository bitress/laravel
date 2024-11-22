<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $data = [
            'name' => 'Cyanne Justin Vega',
            'bio' => 'Web Developer | Tech Enthusiast | Raspberry Pi Fan',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'Python', 'PHP'],
            'email' => 'cyanne@gmail.com',
            'phone' => '+123456789'
        ];

        return view('pages.profile', $data);


    }
}
