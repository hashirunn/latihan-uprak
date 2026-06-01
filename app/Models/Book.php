<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model # books
{
    // protected $table = 'books';
    // protected $primaryKey = 'book_code';

    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'bookshelf_id'
    ];

    public function bookshelf()
    {
        $this->belongsTo(Bookshelf::class, 'bookshelf_id', 'id');
    }
}
