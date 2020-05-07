<?php

namespace App;
use App\Permiso;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table="roles";
    protected $fillable =['nombrerol','slug','descripcion'];

    public function permisos(){
        return $this->belongsToMany('App/permiso');
    }

    
}
