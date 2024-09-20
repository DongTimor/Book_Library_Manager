<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
