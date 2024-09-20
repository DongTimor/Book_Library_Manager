<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    //-------------------------Adding many to many relationship----------------------------------

class Books_Model extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = ['author_id', 'title'];
    protected $guarded = ['id'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Authors_Model::class, 'author_id', 'id');
    }

    public function book_category(): BelongsToMany
    {
        return $this->belongsToMany(Categories_Model::class, 'books_categories', 'book_id', 'category_id');
    }
}
