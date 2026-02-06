<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index(){
        $book = Book::with('category')->latest()->paginate(10);        
        return view('books.index', compact('books'));
    }


public function create(){
    $categories = Category::all();
    return view('books.create', compact('categories'));
}

public function store(Request $request){
    $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'description' => 'nullable',
            'publication_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'isbn' => 'nullable|max:20',
            'category_id' => 'nullable|exists:categories,id'
    ]);

    Book::create($validated);

    return redirect()->route('books.index')->with('success', 'Book added successfully!');
    

    }

}