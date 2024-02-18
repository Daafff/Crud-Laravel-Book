<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Name' => 'required',
            'Description' => 'required',
            'Author' => 'required',
            'Status' => 'required|in:publish,not publish',
        ]);

        $imagePath = $request->file('cover')->store('covers', 'public');
        Book::create(array_merge($validatedData, ['cover' => $imagePath]));

        return redirect()->route('Books.index')->with('success', 'Book created successfully.');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Author' => 'required',
            'Status' => 'required|in:publish,not publish',
        ]);
    
        $book = Book::findOrFail($id);
    
        if ($request->hasFile('cover')) {
            $request->validate([
                'cover' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imagePath = $request->file('cover')->store('covers', 'public');
            $validatedData['cover'] = $imagePath;
        }
    
        $book->update($validatedData);
    
        return redirect()->route('Books.index')->with('success', 'Book updated successfully.');
    }
    
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('Books.index')->with('success', 'Book deleted successfully.');
    }
}
