<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = ['type'];

    public function book(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
