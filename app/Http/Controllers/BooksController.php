<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(Request $request) {
        $books = Book::all();
        return view('books', [
            'books' => $books
        ]);
    }
}
