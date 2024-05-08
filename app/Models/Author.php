<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';

    protected $primaryKey = 'authorId';
    
    protected $fillable = ['author_name', 'author_nationality'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'authorid');
    }

}
