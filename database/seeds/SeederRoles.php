<?php

use Illuminate\Database\Seeder;
use App\role;

class SeederRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      role::create(['nombrerol'=>'Adminstrador','slug'=>'administrador','descripcion'=>'Admin']);  
      role::create(['nombrerol'=>'Usuarioclub','slug'=>'usuario-club','descripcion'=>'clubdeportivo']); 
      role::create(['nombrerol'=>'Invitado','slug'=>'Inivitado-club','descripcion'=>'Inivitado']);   
    }
}
