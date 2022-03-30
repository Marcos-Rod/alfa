<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    //Relación uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
