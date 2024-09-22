<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors=Author::all();
        return view('add-book', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        Book::create($request->all());
        return redirect()->route('admin.books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json($book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {

        $authors=Author::all();
        return view('edit-book', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    function update(BookRequest $request, Book $book)
    {

        $book->update($request->all());
        return redirect()->route('admin.books.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index');
    }

    public function search(){
        $params = request()->search;
        $books = Book::where('title','like',"%$params%")
                        ->orWhereHas('authorBook', function($query) use ($params) {
                            $query->where('name', 'LIKE', "%$params%");})
                        ->get();
        return response()->json($books);
    }
}

