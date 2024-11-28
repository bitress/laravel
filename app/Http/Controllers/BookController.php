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

        public function show_edit_form($id)
        {
            $data = DB::table('books')->where('id', $id)->first();
        
            if (!$data) {
                return redirect('/book')->with('error', 'Book not found!');
            }
        
            return view('pages.edit-book-form', compact('data'));
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

        public function do_edit(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'country_id' => 'required|integer',
                'stock' => 'required|integer',
                'amount' => 'required|numeric',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $book = DB::table('books')->where('id', $id)->first();
        
            if (!$book) {
                return redirect('/book')->with('error', 'Book not found!');
            }
        
            $data = [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'country_id' => $request->input('country_id'),
                'stock' => $request->input('stock'),
                'amount' => $request->input('amount'),
                'updated_at' => now(),
            ];
        
            if ($request->hasFile('photo')) {
                // Delete the old photo if it exists
                if ($book->photo && file_exists(public_path('uploads/' . $book->photo))) {
                    unlink(public_path('uploads/' . $book->photo));
                }
        
                $file = $request->file('photo');
                $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $filename);
        
                $data['photo'] = $filename;
            }
        
            DB::table('books')->where('id', $id)->update($data);
        
            return redirect('/book')->with('success', 'Book updated successfully!');
        }
        

        public function do_delete($id)
        {
            $query = DB::table('books')
            ->where('id', $id)
            ->delete();
            if($query) {
                return redirect('/book')->with('success-delete', 'Book deleted successfully!');
            }
        }

    }
