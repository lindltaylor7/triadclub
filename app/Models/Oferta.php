<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','fecha_cad','empresa_id'];
     //Relacion 1 muchos inversa
     public function empresa(){
        return $this->belongsTo('App\Models\Empresa');
    }
     //Relacion 1 a 1 polimorfica
     public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
