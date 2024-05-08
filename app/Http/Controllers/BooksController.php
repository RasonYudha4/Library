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
        $borrows = Borrowed::all();
        return view('books', [
            'books' => $books,
            'borrows' => $borrows
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
        $borrows = Borrowed::all();
        return view('books', [
            'books' => $books,
            'borrows' => $borrows
        ]);
    }
}
