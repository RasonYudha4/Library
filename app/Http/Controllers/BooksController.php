<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\BookType;
use App\Models\Type;
use App\Models\Author;
use App\Models\Borrowed;

class BooksController extends Controller
{
    public function index(Request $request) {
        $books = Book::all();
        $borrow = Borrowed::where('userId', Auth::id())->first();
        foreach($books as $book){
            $author = Author::where('authorId', $book->authorId)->first();
            // $borrow = Borrowed::where('bookId', $book->id);
        }
        return view('books', [
            'books' => $books,
            'author' => $author,
            'borrow' => $borrow
        ]);
    }

    public function borrow(Request $request) {
        $borrow = Borrowed::firstOrCreate([
            'bookId' => $request->get('borrow'),
            'userId' => $request->user()->id
        ]);

        return redirect('books');
    }

    public function delete(Request $request) {
        $borrow = Borrowed::where([
            ['bookId', '=', $request->get('return')],
            ['userId', '=', Auth::id()]
        ]);                                                 
        $borrow->delete();
        return redirect('books');
    }

    public function searchByName(Request $request) {
        $search = $request->input('searchByName');
        $books = Book::where('title', 'like', "%$search%")->get();
        $borrow = Borrowed::where('userId', Auth::id())->first();
        return view('books', [
            'books' => $books,
            'borrow' => $borrow
        ]);
    }

    public function searchByType(Request $request) {
        $search = $request->input('ByType');
        $type = Type::where('type', 'like', "%$search%")->get();
        $booktype = BookType::where('typeId', $type->typeId)->get();
        $books = Book::where('bookId', $booktype->bookId)->get();
        $borrow = Borrowed::where('userId', Auth::id())->first();
        return view('books', [
            'books' => $books,
            'borrow' => $borrow
        ]);
    }
    
    public function searchByAuthor(Request $request) {
        $search = $request->input('ByAuthor');
        $author = Author::where('author_name', 'like', "%$search%")->first();
        $books = Book::where('authorId', $author->authorid)->get();
        $borrow = Borrowed::where('userId', Auth::id())->first();
        return view('books', [
            'books' => $books,
            'author' => $author,
            'borrow' => $borrow
        ]);
    }
}
