<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    public $timestamps = true;

    protected $fillable = ['title', 'content', 'published_at', 'image_path'];
}
