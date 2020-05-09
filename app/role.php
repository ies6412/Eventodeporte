<?php

namespace App;
use App\Permiso;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table="roles";
    protected $fillable =['nombrerol','slug','descripcion'];
    

    public function permisoss(){
        return $this->belongsToMany('App\permiso','permiso_role','id_role','id_permiso')->withTimestamps();
    }

    
}
