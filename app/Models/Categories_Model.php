<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    //-------------------------Adding many to many relationship----------------------------------

class Categories_Model extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function category_book(): BelongsToMany
    {
        return $this->belongsToMany(Books_Model::class, 'books_categories', 'category_id', 'book_id');
    }
}
