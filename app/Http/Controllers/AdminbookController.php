<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Type;
use App\Models\BookType;
use Illuminate\Http\Request;

class AdminbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.index', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $types = Type::all();

        return view('admin.addbook', [
            'authors' => $authors,
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published_at' => 'required',
            'isbn' => 'required'
        ]);

        $uniqueImageName = time() . '-' . $request->title . '-' . $request->image->extension();
        $request->image->move(public_path('images'), $uniqueImageName);

        $book = Book::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published_at' => $request->input('published_at'),
            'ISBN' => $request->input('isbn'),
            'image_path' => $uniqueImageName,
            'authorId' => $request->input('authorId'),
        ]);

        $selectedTypes = $request->input('type');
        foreach ($selectedTypes as $typeId) {
            $book_type[] = BookType::create([
                'bookId' => $book->id,
                'typeId' => $typeId,
            ]);
        }

        return redirect('/admin/book');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.editbook')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published_at' => $request->input('publish_at'),
            'ISBN' => $request->input('isbn')
        ]);
        
        return redirect('/admin/book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/admin/book');
    }
}
