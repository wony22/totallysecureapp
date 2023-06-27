<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookgenre extends Model
{
    use HasFactory;
    public function book(){
        $this->belongsToMany(Book::class,'bookgenredetail','genre_id','book_id');
    }
}
