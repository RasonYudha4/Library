<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('admin.addauthor');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'author_name' => 'required|unique:App\Models\Author',
            'author_nationality' => 'required',
        ]);
        
        $author = Author::create([
            'author_name' => $request->input('author_name'),
            'author_nationality' => $request->input('author_nationality'),
        ]);
        return redirect('/admin/book/create');
    }
}
