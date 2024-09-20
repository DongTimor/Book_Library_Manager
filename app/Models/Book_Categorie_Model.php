<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    //-------------------------Adding many to many relationship----------------------------------

class Book_Categorie_Model extends Model
{
    use HasFactory;

    protected $table = 'books_categories';
    protected $fillable = ['book_id', 'category_id'];
    protected $guarded = ['id'];
}
