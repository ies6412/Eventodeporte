<?php

namespace App;
use App\clubdeportivo;
use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $table="deportes";
    protected $filable=['nombredeporte'];

    public function clubdeporte(){
     return $this->belongsToMany('App\clubdeportivo');
   }
}
