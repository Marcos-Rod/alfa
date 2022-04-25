<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'title', 'description', 'link', 'position'];

    //Relación polimorfica

    public function imageable(){
        return $this->morphTo();
    }

    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
