<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'name_business', 'mail', 'mail_response', 'seo_term', 'meta_keywords', 'meta_description', 'analytics', 'captcha_public', 'captcha_private'];

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
