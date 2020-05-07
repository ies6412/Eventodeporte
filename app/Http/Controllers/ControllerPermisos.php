<?php

namespace App\Http\Controllers;
use App\role;
use App\Permiso;

use Illuminate\Http\Request;

class ControllerPermisos extends Controller
{
    public function index(){

        $rol=role::all();
        return view('Permiso.permiso',compact('rol'));
            }

        public function verpermisos(){

            $permisos=Permiso::all();
            $tablas="";
           // se puede pasar desde aqui los valores...
            /* foreach($permisos as $permiso)
             
             {
                    
               $tabla="<tr><td><input type='checkbox' name='id' value='".$permiso->id."'>".$permiso->nombrepermiso."</td></tr>";
               $tablas.=$tabla;
             }   
             return $tablas; */

            //aqui pasa todos los valores
             return view('Permiso/verpermisos',compact('permisos'));
            
        
            }  
}
