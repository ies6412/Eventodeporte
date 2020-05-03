<?php

use Illuminate\Database\Seeder;
use App\autoridades;
class SeederAutoridad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        autoridades::create(['nombreautoridad'=>'Presidente']);
        autoridades::create(['nombreautoridad'=>'Vice presidente']);
        autoridades::create(['nombreautoridad'=>'Secretario']);
        autoridades::create(['nombreautoridad'=>'Primer Vocal Principal']);
        autoridades::create(['nombreautoridad'=>'Segundo Vocal Principal']);
        autoridades::create(['nombreautoridad'=>'Tercer Vocal Principal']);
        autoridades::create(['nombreautoridad'=>'Primer Vocal Secundario']);
        autoridades::create(['nombreautoridad'=>'Segundo Vocal Secunddario']);
        autoridades::create(['nombreautoridad'=>'Tercer Vocal Secundario']);

    }
}
