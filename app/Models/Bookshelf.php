<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]
class Bookshelf extends Model # bookshelves
{
    public function book()
    {
        return $this->hasMany(Book::class, 'bookshelf_id', 'id');
    }
}
