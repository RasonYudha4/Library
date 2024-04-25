<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookType;
use App\Models\Type;
use App\Models\Author;

class BooksController extends Controller
{
    public function index(Request $request) {
        $books = Book::all();
        foreach($books as $book){
            $author = Author::where('authorId', $book->authorId)->first();
        }
        return view('books', [
            'books' => $books,
            'author' => $author
        ]);
    }

    public function searchByName(Request $request) {
        $search = $request->input('searchByName');
        $books = Book::where('title', 'like', "%$search%")->get();
        return view('books', [
            'books' => $books
        ]);
    }

    public function searchByType(Request $request) {
        $search = $request->input('ByType');
        $type = Type::where('type', 'like', "%$search%")->get();
        $booktype = BookType::where('typeId', $type->typeId)->get();
        $books = Book::where('bookId', $booktype->bookId)->get();
        return view('books', [
            'books' => $books
        ]);
    }
    
    public function searchByAuthor(Request $request) {
        $search = $request->input('ByAuthor');
        $author = Author::where('author_name', 'like', "%$search%")->get();
        $books = Book::where('authorId', $author->authorId)->get();
        return view('books', [
            'books' => $books
        ]);
    }
}
