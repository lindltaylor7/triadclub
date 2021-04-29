<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['name','ruc','direccion','tlf','cel','ciudad','logo','user_id','rubro_id', 'top'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    //Relacion 1 a 1 inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //Relacionn 1 a 1
    public function rede(){
        return $this->hasOne('App\Models\Rede');
    }
    //Relacion 1 muchos inversa
    public function rubro(){
        return $this->belongsTo('App\Models\Rubro');
    }
    //Relacion 1 a muchos
    public function ofertas(){
        return $this->hasMany('App\Models\Oferta');
    }
     //Relacion 1 a 1 polimorfica
     public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
