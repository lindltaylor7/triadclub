<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{   
    use HasFactory;
    protected $fillable=['fb', 'ig', 'video_yt', 'web', 'empresa_id' ];

    //Relacionn 1 a 1 inversa
    public function empresa(){
        return $this->belongsTo('App\Models\empresa');
    }
}
