<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('Book.index', ['books'=>$books]);
    }

    public function adminPage()
    {
        return view('Book.admin');
    }
    public function create()
    {
        return view('Admin.create');
    }
    public function store(Request $request)
    {
        $book = new Book;
        $book->Title = $request->title;
        $book->Author = $request->author;
        $book->Synopsis = $request->synopsis;
        $book->Save();
        
        return redirect('/books');
    }

    public function database()
    {
     $books = Book::all();
     return view('Admin.list', compact('books'));
    }

    public function show(Book $book)
    {
        return view('Admin.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('Admin.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        Book::where('id', $book->id)
            ->update([
                'Title' => $request->title,
                'Author' => $request->Author,
                'Synopsis' => $request->Synopsis
            ]);

        return redirect('/book/admin');
    }

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/book/admin')->with('status','Data Mahasiswa Berhasil Dihapus!');
    }
}
