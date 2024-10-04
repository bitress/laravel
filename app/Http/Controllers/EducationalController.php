<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalController extends Controller
{
    public function index()
    {
        $data = [
            'education' => [
                [
                    'degree' => 'Bachelor of Science in Information Technology',
                    'institution' => 'XYZ University',
                    'duration' => '2021 to present',
                    'description' => 'Specialized in Web Development, and IoT technologies.'
                ],
                [
                    'degree' => 'High School Diploma',
                    'institution' => 'ABC High School',
                    'duration' => '2014 to 2018',
                    'description' => 'Participated in computer science clubs and science fairs, developed foundational skills in programming and electronics.'
                ]
            ],
            'certifications' => [
                'Certified Python Developer - 2020',
                'Web Development Bootcamp - 2021'
            ]
        ];

        return view('pages.educational', $data);
    }
}
