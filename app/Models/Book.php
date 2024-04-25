<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    public $timestamps = true;

    protected $fillable = ['title', 'content', 'published_at', 'image_path', 'authorId'];

    public function author(): HasOne
    {
        return $this->hasOne(Author::class,'authorId');
    }

    public function types(): HasMany
    {
        return $this->hasMany(BookType::class);
    }
}
