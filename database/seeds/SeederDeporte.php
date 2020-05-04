<?php

use Illuminate\Database\Seeder;
use App\Deporte;
class SeederDeporte extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deporte::create(['nombredeporte'=>'Basquet']);
        Deporte::create(['nombredeporte'=>'Futbol']);
        Deporte::create(['nombredeporte'=>'Natación']);
        Deporte::create(['nombredeporte'=>'EcuaVoley']);
    }
}
