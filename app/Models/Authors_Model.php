<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors_Model extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    public function books()
    {
        return $this->hasMany(Books_Model::class, 'author_id', 'id');
    }
}
