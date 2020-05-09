<?php

namespace App;
use App\role;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permiso extends Model
{
    protected $table="Permisos";
    protected $fillable=['nombrepermiso','slug','descripcion'];

    public function roles(){
     
     return $this->BelongsToMany('App\role','permiso_role','id_role','id_permiso')->withTimestamps();

    }

}
