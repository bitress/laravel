<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class BookController extends Controller
    {
        public function index()
        {
            $data = DB::table('books')->get();
                return view('pages.book', compact('data'));

        }

        public function show_add_form(){
            return view('pages.add-book-form');
        }

        public function do_add(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'country_id' => 'required|integer',
                'stock' => 'required|integer',
                'amount' => 'required|numeric',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            ]);
        
            $filename = null;
        
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
        
                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        
                $file->move(public_path('uploads'), $filename);
            }
        
            $data = [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'country_id' => $request->input('country_id'),
                'stock' => $request->input('stock'),
                'amount' => $request->input('amount'),
                'photo' => $filename, 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        
            DB::table('books')->insert($data);
        
            return redirect('/book')->with('success', 'Book added successfully!');
        }

    }
