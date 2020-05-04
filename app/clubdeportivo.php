<?php

namespace App;
use App\tipoentidad;
use App\Deporte;

use Illuminate\Database\Eloquent\Model;

class clubdeportivo extends Model
{
    protected $table= "clubdeportivos";
    protected $fillable=['nombre','direccion'];


    public function tipoentidaddeportiva()
    {
        return $this->belongsTo('App\tipoentidad','tipoentidad');
    }

    public function deporte(){
             return $this->belongsToMany('App\deporte');
   }

   public function Socio(){
    return $this->belongsToMany('App\Socio');
}


    }
