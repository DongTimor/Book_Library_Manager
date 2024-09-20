<?php

namespace App\Http\Controllers;

use App\Models\Authors_Model;
use App\Models\Books_Model;
use Illuminate\Http\Request;

class Books_Controller extends Controller
{
    function index()
    {
        $books = Books_Model::all();
        return view('index', compact('books'));
    }

    function create()
    {
        $authors=Authors_Model::all();
        return view('add_book', compact('authors'));
    }

    function edit($id)
    {
        $book = Books_Model::find($id);
        $authors=Authors_Model::all();
        return view('edit_book', compact('book', 'authors'));
    }

    function delete($id){
        $book = Books_Model::find($id);
        $book->delete();
        return redirect()->route('admin.books.index');
    }

    function update (Request $request, $id)
    {
        $book = Books_Model::find($id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('admin.books.index');
    }

    function store(Request $request)
    {
        $book = new Books_Model();
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->save();
        return redirect()->route('admin.books.index');
    }

}
