<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'title'];
    protected $guarded = ['id'];

    public function authorBook(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function categoryBooks(): BelongsToMany
    {
        return $this->belongsToMany( Category::class, 'book_category', 'book_id', 'category_id');
    }
}
