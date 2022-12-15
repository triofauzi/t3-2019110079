<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $guarded = [];
     protected $fillable = [
       'id', 'penulis'
    ];

    public function relationToBook(){
        return $this->hasMany(Book::class);
    }

    // public function book(){
    //     return $this->hasMany(Book::class);
    // }

    // protected $fillable = [
    //     'penulis'
    // ];
}
