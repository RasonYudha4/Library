<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Borrowed extends Model
{
    use HasFactory;

    protected $table = 'borrowed';

    public $timestamps = true;

    protected $fillable = ['userId', 'bookId'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function book(): HasOne
    {
        return $this->hasOne(Book::class);
    }
}
