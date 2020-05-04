<?php

namespace App;
use App\clubdeportivo;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table="socios";
    protected $fillable=['nombre','cedula'];

    public function clubdeportivo(){
        return $this->belongsToMany('App\clubdeportivo');
    }
}
