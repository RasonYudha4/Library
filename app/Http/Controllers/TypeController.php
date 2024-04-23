<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return view('admin.addtype');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'type' => 'required|unique:App\Models\Type',
        ]);
        
        $type = Type::create([
            'type' => $request->input('type'),
        ]);
        return redirect('/admin/book/create');
    }
}
