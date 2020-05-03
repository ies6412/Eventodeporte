<?php

use Illuminate\Database\Seeder;
use App\tipoentidad;

class Seedertipoentidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       tipoentidad::create(['nombre'=>'Recreacional']);
       tipoentidad::create(['nombre'=>'Deportivo']);
       tipoentidad::create(['nombre'=>'Formativo']);
    }
}
