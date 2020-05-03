<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Seedertipoentidad::class);
        $this->call(SeederAutoridad::class);
        $this->call(SeederClubDeportivo::class);
    }
}
