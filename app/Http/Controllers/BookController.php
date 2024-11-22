<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class BookController extends Controller
    {
        public function index()
        {
            $data = DB::table('books')->get();
                return view('pages.book', compact('data'));

        }
    }
