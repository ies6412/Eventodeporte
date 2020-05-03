<?php

namespace App;
use App\clubdeportivo; 

use Illuminate\Database\Eloquent\Model;

class tipoentidad extends Model
{
    protected $table= "tipoentidad";
    protected $fillable=['nombre'];
    
    public function clubdeportivo(){

    return $this->hasMany('App\clubdeportivo');

    }

    


}
