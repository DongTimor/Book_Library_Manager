<?php

namespace App\Http\Controllers;

use App\Models\Categories_Model;
use Illuminate\Http\Request;

class Categories_Controller extends Controller
{

    //-------------------------Adding many to many relationship----------------------------------
    function books_of_category($id)
    {
        $categories = Categories_Model::find($id);
        return response()->json($categories->category_book);
    }
}
