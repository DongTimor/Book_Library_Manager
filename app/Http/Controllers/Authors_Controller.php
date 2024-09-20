<?php

namespace App\Http\Controllers;

use App\Models\Authors_Model;
use Illuminate\Http\Request;

class Authors_Controller extends Controller
{
    function index()
    {
        $authors = Authors_Model::all();
        return view('author', compact('authors'));
    }

    function store(Request $request)
    {
        $author = new Authors_Model();
        $author->name = $request->name;
        $author->save();
        return redirect()->route('admin.authors.index');
    }

    function delete($id)
    {
        $author = Authors_Model::find($id);
        $author->delete();
        return redirect()->route('admin.authors.index');
    }
}
