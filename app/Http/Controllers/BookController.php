<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $categories = Category::all(); // Lấy tất cả các categories

        return view('book.index', compact('books', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('book.create', compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        // dd($request->all());
        $book = Book::create($request->all());
        $book -> categoryBooks() ->attach($request->category_id);
        return redirect()->route('admin.books.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {

        $authors = Author::all();
        $categories = Category::all();
        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    function update(BookRequest $request, Book $book)
    {

        $book->update($request->all());
        // $book -> categoryBooks() ->attach($request->category_id);
        $book -> categoryBooks() ->sync($request->category_id);

        return redirect()->route('admin.books.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
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

