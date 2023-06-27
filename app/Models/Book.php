<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function bookgenre(){
        $this->belongsToMany(Bookgenre::class,'bookgenredetail','book_id','genre_id');
    }
}
