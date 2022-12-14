<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Book extends Model
{
    use HasFactory;

    protected $guarded;
    public function authors()
    {
        // return $this->hasMany(Author::class);
        return $this->belongsTo(Author::class, 'foreign_key');
        $authors = Author::find(5)->authors;

        foreach ($authors as $author) {

        }
    }

}
