<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relación uno a muchos polimorfica
    public function image(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
