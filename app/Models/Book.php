<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = [];



    protected $fillable = [
        'id', 'judul', 'halaman', 'kategori', 'penerbit', 'authors_id'
    ];


    public function author(){
        return $this->belongsTo(Author::class,'authors_id');
    }
}
