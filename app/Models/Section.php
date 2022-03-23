<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'extract', 'content', 'status'];

    //Relación uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
