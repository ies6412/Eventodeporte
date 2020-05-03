<?php
use App\clubdeportivo;
use Illuminate\Database\Seeder;

class SeederClubDeportivo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $clubdeportivo=clubdeportivo::where('nombre','Primer Club')->first();
          if($clubdeportivo)
           {
               $clubdeportivo->delete();
           }
           clubdeportivo::create(['tipoentidad'=>'1',
           'nombre'=>'Primer Club',
           'direccion'=>'Direccion 1']);   


        
           $clubdeportivo=clubdeportivo::where('nombre','Segundo Club')->first();
           if($clubdeportivo)
            {
                $clubdeportivo->delete();
            }
            clubdeportivo::create(['tipoentidad'=>'2',
                              'nombre'=>'Segundo Club',
                              'direccion'=>'Direccion 2']);

           $clubdeportivo=clubdeportivo::where('nombre','Tercer Club')->first();
            if($clubdeportivo)
            {
              $clubdeportivo->delete();
                               }
             clubdeportivo::create(['tipoentidad'=>'3',
                              'nombre'=>'Tercer Club',
                              'direccion'=>'Direccion 3']);

         $clubdeportivo=clubdeportivo::where('nombre','Cuarto Club')->first();
         if($clubdeportivo)
                              {
                                $clubdeportivo->delete();
                                                 }                    
        clubdeportivo::create(['tipoentidad'=>'1',
                              'nombre'=>'Cuarto Club',
                              'direccion'=>'Direccion 7']);

       $clubdeportivo=clubdeportivo::where('nombre','Otro Club')->first();
       if($clubdeportivo)
        {
         $clubdeportivo->delete();
            }                            
        clubdeportivo::create(['tipoentidad'=>'3',
                              'nombre'=>'Otro Club',
                              'direccion'=>'Direccion 9']); 

    }
}
