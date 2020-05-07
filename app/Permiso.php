<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permiso extends Model
{
    protected $table="Permisos";
    protected $fillable=['nombrepermiso','slug','descripcion'];

    public function roles(){
     
     return $this->BelongsToMany('App\role');

    }

}
