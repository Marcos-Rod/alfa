<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mail', 'phone', 'date', 'team_id', 'service_id'];

    //Realciones uno a muchos inversa
    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
