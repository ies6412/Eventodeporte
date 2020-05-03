<?php

namespace App;
use App\tipoentidad;

use Illuminate\Database\Eloquent\Model;

class clubdeportivo extends Model
{
    protected $table= "clubdeportivos";
    protected $fillable=['nombre','direccion'];


    public function tipoentidaddeportiva()
    {
        return $this->belongsTo('App\tipoentidad','tipoentidad');
    }

    }
