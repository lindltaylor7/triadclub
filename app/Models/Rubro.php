<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //Relacion 1 a muchos
    public function empresas(){
        return $this->hasMany('App\Models\Empresa');
    }
     //Relacion 1 a 1 polimorfica
     public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
